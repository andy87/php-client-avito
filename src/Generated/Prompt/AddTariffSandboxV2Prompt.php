<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffsV2.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTariffSandboxV2
 */
class AddTariffSandboxV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/delivery-sandbox/tariffsV2';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['deliveryProviderTariffId' => 'deliveryProviderTariffId', 'directions' => 'directions', 'name' => 'name', 'tariffType' => 'tariffType', 'tariffZones' => 'tariffZones', 'termsZones' => 'termsZones'];

    protected const REQUIRED_FIELDS = ['deliveryProviderTariffId', 'directions', 'name', 'tariffZones', 'termsZones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['directions' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DirectionV2::class], 'tariffZones' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TariffZone::class], 'termsZones' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TermsZone::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['deliveryProviderTariffId', 'directions', 'name', 'tariffType', 'tariffZones', 'termsZones'];

    /** @var string Идентификатор тарифного плана на стороне службы доставки - должен быть уникален.
 */
    public string $deliveryProviderTariffId;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DirectionV2> Body field directions */
    public array $directions;

    /** @var string Человекопонятное название тарифного плана */
    public string $name;

    /** @var string|null Тип разделения тарифа по габаритам товаров.
- MGT - малогабаритные товары
- KGT - крупногабаритные товары
Если поле не указано, то тариф должен содержать оба типа разделения (для обратной совместимости со старыми тарифами).
 */
    public ?string $tariffType = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TariffZone> Body field tariffZones */
    public array $tariffZones;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TermsZone> Body field termsZones */
    public array $termsZones;
}
