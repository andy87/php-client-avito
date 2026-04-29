<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito;

use Andy87\ClientsBase\Auth\ClientCredentialsAuthorizationStrategy;
use Andy87\ClientsBase\Contracts\AuthorizationStrategyInterface;
use Andy87\ClientsBase\Contracts\HttpTransportInterface;
use Andy87\ClientsBase\Http\NativeHttpTransport;
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

    /**
     * Создаёт клиент Avito API.
     *
     * @param AvitoConfig|array<string, mixed> $config Конфигурация клиента.
     * @param HttpTransportInterface|null $transport HTTP-транспорт.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Стратегия авторизации.
     *
     * @return void
     */
    public function __construct(
        AvitoConfig|array $config,
        ?HttpTransportInterface $transport = null,
        ?AuthorizationStrategyInterface $authorizationStrategy = null,
    ) {
        $config = is_array($config) ? AvitoConfig::fromArray($config) : $config;
        $this->baseUrl = $config->baseUrl;
        $this->transport = $transport ?? new NativeHttpTransport();
        $this->authorizationStrategy = $authorizationStrategy ?? new ClientCredentialsAuthorizationStrategy(
            tokenUrl: $config->tokenUrl,
            clientId: $config->clientId,
            clientSecret: $config->clientSecret,
            timeout: $config->timeout,
        );
        $this->timeout = $config->timeout;
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
}
