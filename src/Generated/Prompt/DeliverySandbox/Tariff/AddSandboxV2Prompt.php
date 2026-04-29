<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Tariff;

use Andy87\ClientsAvito\Generated\Prompt\AddTariffSandboxV2Prompt as BaseAddTariffSandboxV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffsV2.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTariffSandboxV2
 * 
 * @property string $deliveryProviderTariffId Идентификатор тарифного плана на стороне службы доставки - должен быть уникален.
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DirectionV2> $directions Body field directions
 * @property string $name Человекопонятное название тарифного плана
 * @property string|null $tariffType Тип разделения тарифа по габаритам товаров. - MGT - малогабаритные товары - KGT - крупногабаритные товары Если поле не указано, то тариф должен содержать оба типа разделения (для обратной совместимости со старыми тарифами).
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TariffZone> $tariffZones Body field tariffZones
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TermsZone> $termsZones Body field termsZones
 */
class AddSandboxV2Prompt extends BaseAddTariffSandboxV2Prompt
{
}
