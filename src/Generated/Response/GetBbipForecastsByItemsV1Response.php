<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/bbip/forecasts/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_forecasts_by_items_v1
 */
class GetBbipForecastsByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\php_client_avito\Generated\Schema\Promotion\BbipForecastByItemV1::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Promotion\GetBbipForecastByItemsV1Resp::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках по объявлениям */
    public array $errors;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\BbipForecastByItemV1> Прогноз по каждому объявлению */
    public array $items;

    /** @var int|null Общая стоимость по всем объявлениям (в копейках) */
    public ?int $totalPrice = null;
}
