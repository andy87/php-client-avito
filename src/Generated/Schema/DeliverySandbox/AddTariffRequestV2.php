<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AddTariffRequestV2.
 */
class AddTariffRequestV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderTariffId' => 'deliveryProviderTariffId', 'directions' => 'directions', 'name' => 'name', 'tariffType' => 'tariffType', 'tariffZones' => 'tariffZones', 'termsZones' => 'termsZones'];

    protected const REQUIRED_FIELDS = ['name', 'deliveryProviderTariffId', 'directions', 'tariffZones', 'termsZones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['directions' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DirectionV2::class], 'tariffZones' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TariffZone::class], 'termsZones' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TermsZone::class]];

    /** @var string Идентификатор тарифного плана на стороне службы доставки - должен быть уникален.
 */
    public string $deliveryProviderTariffId;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DirectionV2> Schema field directions */
    public array $directions;

    /** @var string Человекопонятное название тарифного плана */
    public string $name;

    /** @var string|null Тип разделения тарифа по габаритам товаров.
- MGT - малогабаритные товары
- KGT - крупногабаритные товары
Если поле не указано, то тариф должен содержать оба типа разделения (для обратной совместимости со старыми тарифами).
 */
    public ?string $tariffType = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TariffZone> Schema field tariffZones */
    public array $tariffZones;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TermsZone> Schema field termsZones */
    public array $termsZones;
}
