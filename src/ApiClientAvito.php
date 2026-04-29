<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito;

use Andy87\ClientsBase\Auth\ClientCredentialsAuthorizationStrategy;
use Andy87\ClientsBase\Contracts\AuthorizationStrategyInterface;
use Andy87\ClientsBase\Contracts\HttpTransportInterface;
use Andy87\ClientsBase\Event\AfterInitEvent;
use Andy87\ClientsBase\Event\ClientEvents;
use Andy87\ClientsBase\Http\NativeHttpTransport;
use Andy87\ClientsBase\Runtime\ClientRuntime;
use Andy87\ClientsAvito\Generated\ProviderRegistry;

/**
 * Главный клиент Avito API с ленивым доступом к provider-разделам.
 *
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AccountsHierarchyProvider $accountsHierarchy
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AuctionProvider $auction
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AuthProvider $auth
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AutoloadProvider $autoload
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AutostrategyProvider $autostrategy
 * @property-read \Andy87\ClientsAvito\Generated\Provider\AutotekaProvider $autoteka
 * @property-read \Andy87\ClientsAvito\Generated\Provider\CalltrackingProvider $callTracking
 * @property-read \Andy87\ClientsAvito\Generated\Provider\CpaProvider $cpa
 * @property-read \Andy87\ClientsAvito\Generated\Provider\CpxpromoProvider $cpxPromo
 * @property-read \Andy87\ClientsAvito\Generated\Provider\DeliverySandboxProvider $deliverySandbox
 * @property-read \Andy87\ClientsAvito\Generated\Provider\ItemProvider $item
 * @property-read \Andy87\ClientsAvito\Generated\Provider\JobProvider $job
 * @property-read \Andy87\ClientsAvito\Generated\Provider\MessengerProvider $messenger
 * @property-read \Andy87\ClientsAvito\Generated\Provider\OrderManagementProvider $orderManagement
 * @property-read \Andy87\ClientsAvito\Generated\Provider\PromotionProvider $promotion
 * @property-read \Andy87\ClientsAvito\Generated\Provider\RatingsProvider $ratings
 * @property-read \Andy87\ClientsAvito\Generated\Provider\RealtyReportsProvider $realtyReports
 * @property-read \Andy87\ClientsAvito\Generated\Provider\SbcGatewayProvider $sbcGateway
 * @property-read \Andy87\ClientsAvito\Generated\Provider\StockManagementProvider $stockManagement
 * @property-read \Andy87\ClientsAvito\Generated\Provider\StrProvider $str
 * @property-read \Andy87\ClientsAvito\Generated\Provider\TariffProvider $tariff
 * @property-read \Andy87\ClientsAvito\Generated\Provider\TrxpromoProvider $trxPromo
 * @property-read \Andy87\ClientsAvito\Generated\Provider\UserProvider $user
 */
class ApiClientAvito
{
    public const EVENTS = 'events';
    public const HEADERS = 'headers';

    public const EVENT_AFTER_INIT = ClientEvents::AFTER_INIT;
    public const EVENT_BEFORE_REQUEST = ClientEvents::BEFORE_REQUEST;
    public const EVENT_AFTER_REQUEST = ClientEvents::AFTER_REQUEST;
    public const EVENT_REQUEST_EXCEPTION = ClientEvents::REQUEST_EXCEPTION;

    /** @var array<string, BaseAvitoProvider> Созданные provider-разделы. */
    private array $providers = [];

    /** @var string Базовый URL Avito API. */
    private string $baseUrl;

    /** @var AuthorizationStrategyInterface Стратегия авторизации. */
    private AuthorizationStrategyInterface $authorizationStrategy;

    /** @var HttpTransportInterface HTTP-транспорт. */
    private HttpTransportInterface $transport;

    /** @var int Таймаут HTTP-запросов. */
    private int $timeout;

    /** @var ClientRuntime Runtime-контекст клиента. */
    private ClientRuntime $runtime;

    /**
     * Создаёт клиент Avito API.
     *
     * @param AvitoConfig|array<string, mixed> $config Конфигурация клиента.
     * @param HttpTransportInterface|array<string, mixed>|null $transport HTTP-транспорт или options вторым аргументом.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Стратегия авторизации.
     * @param array<string, mixed>|null $options Options клиента, если transport передан отдельным аргументом.
     *
     * @return void
     *
     * @throws \InvalidArgumentException Если options описаны некорректно.
     */
    public function __construct(
        AvitoConfig|array $config,
        HttpTransportInterface|array|null $transport = null,
        ?AuthorizationStrategyInterface $authorizationStrategy = null,
        ?array $options = null,
    ) {
        if (is_array($transport)) {
            if ($authorizationStrategy !== null || $options !== null) {
                throw new \InvalidArgumentException('Options as second argument cannot be combined with authorization strategy or fourth argument options.');
            }

            $options = $transport;
            $transport = null;
        }

        $options ??= [];
        $config = is_array($config) ? AvitoConfig::fromArray($config) : $config;
        $this->runtime = new ClientRuntime(
            headers: $this->getOptionArray($options, self::HEADERS),
            events: $this->getOptionArray($options, self::EVENTS),
        );
        $this->baseUrl = $config->baseUrl;
        $this->transport = $transport ?? new NativeHttpTransport();
        $this->authorizationStrategy = $authorizationStrategy ?? new ClientCredentialsAuthorizationStrategy(
            tokenUrl: $config->tokenUrl,
            clientId: $config->clientId,
            clientSecret: $config->clientSecret,
            timeout: $config->timeout,
        );
        $this->timeout = $config->timeout;
        $this->runtime->dispatch(self::EVENT_AFTER_INIT, new AfterInitEvent($this));
    }

    /**
     * Возвращает provider-раздел по имени свойства и создаёт его при первом обращении.
     *
     * @param string $name Имя provider-раздела.
     *
     * @return BaseAvitoProvider Provider-раздел.
     *
     * @throws \OutOfBoundsException Если раздел не зарегистрирован.
     */
    public function __get(string $name): BaseAvitoProvider
    {
        return $this->provider($name);
    }

    /**
     * Проверяет, зарегистрирован ли provider-раздел.
     *
     * @param string $name Имя provider-раздела.
     *
     * @return bool true, если раздел доступен.
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, ProviderRegistry::providers());
    }

    /**
     * Возвращает provider-раздел по имени.
     *
     * @param string $name Имя provider-раздела.
     *
     * @return BaseAvitoProvider Provider-раздел.
     *
     * @throws \OutOfBoundsException Если раздел не зарегистрирован.
     */
    public function provider(string $name): BaseAvitoProvider
    {
        if (isset($this->providers[$name])) {
            return $this->providers[$name];
        }

        $providers = ProviderRegistry::providers();
        $className = $providers[$name] ?? null;

        if ($className === null) {
            throw new \OutOfBoundsException(sprintf('Avito provider "%s" is not registered.', $name));
        }

        return $this->providers[$name] = new $className(
            baseUrl: $this->baseUrl,
            authorizationStrategy: $this->authorizationStrategy,
            transport: $this->transport,
            timeout: $this->timeout,
            runtime: $this->runtime,
        );
    }

    /**
     * Возвращает список доступных provider-разделов.
     *
     * @return list<string> Имена provider-разделов.
     */
    public function providerNames(): array
    {
        return array_keys(ProviderRegistry::providers());
    }

    /**
     * Добавляет обработчик события клиента.
     *
     * @param string $eventName Имя события.
     * @param callable $listener Обработчик события.
     *
     * @return static Текущий клиент.
     */
    public function on(string $eventName, callable $listener): static
    {
        $this->runtime->on($eventName, $listener);

        return $this;
    }

    /**
     * Полностью заменяет дефолтные пользовательские заголовки.
     *
     * @param array<string, string> $headers Заголовки.
     *
     * @return static Текущий клиент.
     *
     * @throws \InvalidArgumentException Если заголовки описаны некорректно.
     */
    public function setHeaders(array $headers): static
    {
        $this->runtime->setHeaders($headers);

        return $this;
    }

    /**
     * Добавляет или перезаписывает дефолтные пользовательские заголовки.
     *
     * @param array<string, string> $headers Заголовки.
     *
     * @return static Текущий клиент.
     *
     * @throws \InvalidArgumentException Если заголовки описаны некорректно.
     */
    public function addHeaders(array $headers): static
    {
        $this->runtime->addHeaders($headers);

        return $this;
    }

    /**
     * Возвращает дефолтные пользовательские заголовки.
     *
     * @return array<string, string> Заголовки.
     */
    public function getHeaders(): array
    {
        return $this->runtime->getHeaders();
    }

    /**
     * Возвращает array-option по имени.
     *
     * @param array<string, mixed> $options Options клиента.
     * @param string $name Имя option.
     *
     * @return array<string, mixed> Значение option.
     *
     * @throws \InvalidArgumentException Если option не является массивом.
     */
    private function getOptionArray(array $options, string $name): array
    {
        $value = $options[$name] ?? [];

        if (!is_array($value)) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be an array.', $name));
        }

        return $value;
    }
}
