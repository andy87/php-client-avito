<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated;

/**
 * Хранит карту лениво доступных provider-разделов Avito API.
 */
class ProviderRegistry
{
    /**
     * Возвращает карту свойств клиента и provider-классов.
     *
     * @return array<string, class-string>
     */
    public static function providers(): array
    {
        return [
            'accountsHierarchy' => Provider\AccountsHierarchyProvider::class,
            'auction' => Provider\AuctionProvider::class,
            'auth' => Provider\AuthProvider::class,
            'autoload' => Provider\AutoloadProvider::class,
            'autostrategy' => Provider\AutostrategyProvider::class,
            'autoteka' => Provider\AutotekaProvider::class,
            'callTracking' => Provider\CalltrackingProvider::class,
            'cpa' => Provider\CpaProvider::class,
            'cpxPromo' => Provider\CpxpromoProvider::class,
            'deliverySandbox' => Provider\DeliverySandboxProvider::class,
            'item' => Provider\ItemProvider::class,
            'job' => Provider\JobProvider::class,
            'messenger' => Provider\MessengerProvider::class,
            'orderManagement' => Provider\OrderManagementProvider::class,
            'promotion' => Provider\PromotionProvider::class,
            'ratings' => Provider\RatingsProvider::class,
            'realtyReports' => Provider\RealtyReportsProvider::class,
            'sbcGateway' => Provider\SbcGatewayProvider::class,
            'stockManagement' => Provider\StockManagementProvider::class,
            'str' => Provider\StrProvider::class,
            'tariff' => Provider\TariffProvider::class,
            'trxPromo' => Provider\TrxpromoProvider::class,
            'user' => Provider\UserProvider::class,
        ];
    }
}
