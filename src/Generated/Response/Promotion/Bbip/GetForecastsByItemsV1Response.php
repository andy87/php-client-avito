<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Response\GetBbipForecastsByItemsV1Response as BaseGetBbipForecastsByItemsV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/bbip/forecasts/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_forecasts_by_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> $errors Информация об ошибках по объявлениям
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastByItemV1> $items Прогноз по каждому объявлению
 * @property int|null $totalPrice Общая стоимость по всем объявлениям (в копейках)
 */
class GetForecastsByItemsV1Response extends BaseGetBbipForecastsByItemsV1Response
{
}
