<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Prompt\GetBbipForecastsByItemsV1Prompt as BaseGetBbipForecastsByItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/bbip/forecasts/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_forecasts_by_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> $items Данные по объявлениям для запроса прогноза
 */
class GetForecastsByItemsV1Prompt extends BaseGetBbipForecastsByItemsV1Prompt
{
}
