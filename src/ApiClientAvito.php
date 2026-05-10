<?php

declare(strict_types=1);

namespace and_y87\php_client_avito;

use and_y87\PhpClientSdk\Auth\ClientCredentialsAuthorizationStrategy;
use and_y87\PhpClientSdk\Config\ClientOptions;
use and_y87\PhpClientSdk\Contracts\AuthorizationStrategyResolverInterface;
use and_y87\PhpClientSdk\Contracts\AuthorizationStrategyInterface;
use and_y87\PhpClientSdk\Contracts\CacheInterface;
use and_y87\PhpClientSdk\Contracts\HttpTransportInterface;
use and_y87\PhpClientSdk\Event\AfterInitEvent;
use and_y87\PhpClientSdk\Event\ClientEvents;
use and_y87\PhpClientSdk\Http\NativeHttpTransport;
use and_y87\PhpClientSdk\Http\TraceableTransport;
use and_y87\PhpClientSdk\Runtime\ClientRuntime;
use and_y87\php_client_avito\Generated\ProviderRegistry;

/**
 * Главный клиент Avito API с ленивым доступом к provider-разделам.
 *
 * @property-read \and_y87\php_client_avito\Generated\Provider\AccountsHierarchyProvider $accountsHierarchy
 * @property-read \and_y87\php_client_avito\Generated\Provider\AuctionProvider $auction
 * @property-read \and_y87\php_client_avito\Generated\Provider\AuthProvider $auth
 * @property-read \and_y87\php_client_avito\Generated\Provider\AutoloadProvider $autoload
 * @property-read \and_y87\php_client_avito\Generated\Provider\AutostrategyProvider $autostrategy
 * @property-read \and_y87\php_client_avito\Generated\Provider\AutotekaProvider $autoteka
 * @property-read \and_y87\php_client_avito\Generated\Provider\CalltrackingProvider $callTracking
 * @property-read \and_y87\php_client_avito\Generated\Provider\CpaProvider $cpa
 * @property-read \and_y87\php_client_avito\Generated\Provider\CpxpromoProvider $cpxPromo
 * @property-read \and_y87\php_client_avito\Generated\Provider\DeliverySandboxProvider $deliverySandbox
 * @property-read \and_y87\php_client_avito\Generated\Provider\ItemProvider $item
 * @property-read \and_y87\php_client_avito\Generated\Provider\JobProvider $job
 * @property-read \and_y87\php_client_avito\Generated\Provider\MessengerProvider $messenger
 * @property-read \and_y87\php_client_avito\Generated\Provider\OrderManagementProvider $orderManagement
 * @property-read \and_y87\php_client_avito\Generated\Provider\PromotionProvider $promotion
 * @property-read \and_y87\php_client_avito\Generated\Provider\RatingsProvider $ratings
 * @property-read \and_y87\php_client_avito\Generated\Provider\RealtyReportsProvider $realtyReports
 * @property-read \and_y87\php_client_avito\Generated\Provider\SbcGatewayProvider $sbcGateway
 * @property-read \and_y87\php_client_avito\Generated\Provider\StockManagementProvider $stockManagement
 * @property-read \and_y87\php_client_avito\Generated\Provider\StrProvider $str
 * @property-read \and_y87\php_client_avito\Generated\Provider\TariffProvider $tariff
 * @property-read \and_y87\php_client_avito\Generated\Provider\TrxpromoProvider $trxPromo
 * @property-read \and_y87\php_client_avito\Generated\Provider\UserProvider $user
 */
class ApiClientAvito
{
    public const EVENTS = 'events';
    public const HEADERS = 'headers';
    public const AUTHORIZATION_RESOLVER = 'authorizationResolver';
    public const REFRESH_AUTHORIZATION_STATUS_CODES = 'refreshAuthorizationStatusCodes';
    public const TRACEABLE_TRANSPORT = 'traceableTransport';
    public const TOKEN_CACHE = 'tokenCache';
    public const TOKEN_CACHE_KEY = 'tokenCacheKey';
    public const TOKEN_CLOCK_SKEW = 'tokenClockSkew';

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

    /** @var ClientOptions Настройки выполнения запросов. */
    private ClientOptions $options;

    /**
     * Создаёт клиент Avito API.
     *
     * @param AvitoConfig|array<string, mixed> $config Конфигурация клиента.
     * @param HttpTransportInterface|array<string, mixed>|ClientOptions|null $transport HTTP-транспорт, ClientOptions или options вторым аргументом.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Стратегия авторизации.
     * @param array<string, mixed>|ClientOptions|null $options Options клиента, если transport передан отдельным аргументом.
     *
     * @return void
     *
     * @throws \InvalidArgumentException Если options описаны некорректно.
     */
    public function __construct(
        AvitoConfig|array $config,
        HttpTransportInterface|array|ClientOptions|null $transport = null,
        ?AuthorizationStrategyInterface $authorizationStrategy = null,
        array|ClientOptions|null $options = null,
    ) {
        if (is_array($transport) || $transport instanceof ClientOptions) {
            if ($authorizationStrategy !== null || $options !== null) {
                throw new \InvalidArgumentException('Options as second argument cannot be combined with authorization strategy or fourth argument options.');
            }

            $options = $transport;
            $transport = null;
        }

        $options ??= [];
        $config = is_array($config) ? AvitoConfig::fromArray($config) : $config;
        $this->options = $this->createClientOptions($options, $config->timeout);
        $this->runtime = new ClientRuntime(
            headers: $this->options->headers,
            events: $this->options->events,
        );
        $this->baseUrl = $config->getBaseUrl();
        $this->transport = $this->createTransport($transport ?? new NativeHttpTransport(), $options);
        $this->authorizationStrategy = $this->createAuthorizationStrategy($config, $authorizationStrategy, $options);
        $this->timeout = $this->options->timeout;
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
            options: $this->options,
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
     * Возвращает HTTP-транспорт клиента.
     *
     * @return HttpTransportInterface HTTP-транспорт.
     */
    public function getTransport(): HttpTransportInterface
    {
        return $this->transport;
    }

    /**
     * Возвращает диагностический transport-wrapper, если он включён.
     *
     * @return TraceableTransport|null Traceable transport или null.
     */
    public function getTraceableTransport(): ?TraceableTransport
    {
        return $this->transport instanceof TraceableTransport ? $this->transport : null;
    }

    /**
     * Создаёт настройки выполнения запросов из ClientOptions или массива options.
     *
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     * @param int $timeout Таймаут из конфигурации Avito.
     *
     * @return ClientOptions Настройки выполнения запросов.
     *
     * @throws \InvalidArgumentException Если options описаны некорректно.
     */
    private function createClientOptions(array|ClientOptions $options, int $timeout): ClientOptions
    {
        if ($options instanceof ClientOptions) {
            return $options;
        }

        return new ClientOptions(
            timeout: (int) ($options['timeout'] ?? $timeout),
            headers: $this->getOptionArray($options, self::HEADERS),
            events: $this->getOptionArray($options, self::EVENTS),
            authorizationResolver: $this->getAuthorizationResolverOption($options),
            refreshAuthorizationStatusCodes: $this->getRefreshStatusCodesOption($options),
        );
    }

    /**
     * Создаёт HTTP-транспорт с опциональной диагностической обёрткой.
     *
     * @param HttpTransportInterface $transport Исходный HTTP-транспорт.
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     *
     * @return HttpTransportInterface HTTP-транспорт.
     */
    private function createTransport(HttpTransportInterface $transport, array|ClientOptions $options): HttpTransportInterface
    {
        if ($transport instanceof TraceableTransport) {
            return $transport;
        }

        if (is_array($options) && ($options[self::TRACEABLE_TRANSPORT] ?? false) === true) {
            return new TraceableTransport($transport);
        }

        return $transport;
    }

    /**
     * Создаёт стратегию авторизации по умолчанию или возвращает пользовательскую.
     *
     * @param AvitoConfig $config Конфигурация клиента.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Пользовательская стратегия авторизации.
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     *
     * @return AuthorizationStrategyInterface Стратегия авторизации.
     *
     * @throws \InvalidArgumentException Если cache-options описаны некорректно.
     */
    private function createAuthorizationStrategy(
        AvitoConfig $config,
        ?AuthorizationStrategyInterface $authorizationStrategy,
        array|ClientOptions $options,
    ): AuthorizationStrategyInterface {
        if ($authorizationStrategy !== null) {
            return $authorizationStrategy;
        }

        $optionsArray = is_array($options) ? $options : [];

        return new ClientCredentialsAuthorizationStrategy(
            tokenUrl: $config->tokenUrl,
            clientId: $config->clientId,
            clientSecret: $config->clientSecret,
            timeout: $this->options->timeout,
            tokenCache: $this->getTokenCacheOption($optionsArray),
            tokenCacheKey: $this->getTokenCacheKeyOption($optionsArray),
            clockSkew: $this->getTokenClockSkewOption($optionsArray),
        );
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

    /**
     * Возвращает resolver стратегии авторизации из options.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return AuthorizationStrategyResolverInterface|null Resolver стратегии авторизации.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getAuthorizationResolverOption(array $options): ?AuthorizationStrategyResolverInterface
    {
        $resolver = $options[self::AUTHORIZATION_RESOLVER] ?? null;

        if ($resolver === null || $resolver instanceof AuthorizationStrategyResolverInterface) {
            return $resolver;
        }

        throw new \InvalidArgumentException(sprintf(
            'Option "%s" must be an instance of %s.',
            self::AUTHORIZATION_RESOLVER,
            AuthorizationStrategyResolverInterface::class,
        ));
    }

    /**
     * Возвращает cache-хранилище OAuth token из options.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return CacheInterface|null Cache-хранилище или null для памяти процесса.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getTokenCacheOption(array $options): ?CacheInterface
    {
        $cache = $options[self::TOKEN_CACHE] ?? null;

        if ($cache === null || $cache instanceof CacheInterface) {
            return $cache;
        }

        throw new \InvalidArgumentException(sprintf(
            'Option "%s" must be an instance of %s.',
            self::TOKEN_CACHE,
            CacheInterface::class,
        ));
    }

    /**
     * Возвращает ключ хранения OAuth token из options.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return string|null Ключ кеша или null для автоматического ключа SDK.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getTokenCacheKeyOption(array $options): ?string
    {
        $cacheKey = $options[self::TOKEN_CACHE_KEY] ?? null;

        if ($cacheKey === null || is_string($cacheKey)) {
            return $cacheKey;
        }

        throw new \InvalidArgumentException(sprintf('Option "%s" must be a string.', self::TOKEN_CACHE_KEY));
    }

    /**
     * Возвращает ранний сдвиг обновления OAuth token из options.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return int Количество секунд до expires_at, за которое токен считается устаревшим.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getTokenClockSkewOption(array $options): int
    {
        $clockSkew = $options[self::TOKEN_CLOCK_SKEW] ?? 60;

        if (!is_int($clockSkew) && !(is_string($clockSkew) && ctype_digit($clockSkew))) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be a non-negative integer.', self::TOKEN_CLOCK_SKEW));
        }

        $clockSkew = (int) $clockSkew;

        if ($clockSkew < 0) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be a non-negative integer.', self::TOKEN_CLOCK_SKEW));
        }

        return $clockSkew;
    }

    /**
     * Возвращает HTTP-статусы для refresh authorization retry.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return list<int> HTTP-статусы.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getRefreshStatusCodesOption(array $options): array
    {
        $statusCodes = $options[self::REFRESH_AUTHORIZATION_STATUS_CODES] ?? [401];

        if (!is_array($statusCodes)) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be an array.', self::REFRESH_AUTHORIZATION_STATUS_CODES));
        }

        return array_map(static function (mixed $statusCode): int {
            if (!is_int($statusCode) && !(is_string($statusCode) && ctype_digit($statusCode))) {
                throw new \InvalidArgumentException('Refresh authorization status code must be an integer.');
            }

            return (int) $statusCode;
        }, array_values($statusCodes));
    }
}
