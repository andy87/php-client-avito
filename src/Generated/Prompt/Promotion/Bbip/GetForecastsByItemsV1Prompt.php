<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Promotion\Bbip;

use and_y87\php_client_avito\Generated\Prompt\GetBbipForecastsByItemsV1Prompt as BaseGetBbipForecastsByItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/bbip/forecasts/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_forecasts_by_items_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> $items Данные по объявлениям для запроса прогноза
 */
class GetForecastsByItemsV1Prompt extends BaseGetBbipForecastsByItemsV1Prompt
{
}
