<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API get_bbip_forecasts_by_items_v1.
 */
class GetBbipForecastsByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastByItemV1::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\GetBbipForecastByItemsV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках по объявлениям */
    public array $errors;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastByItemV1> Прогноз по каждому объявлению */
    public array $items;

    /** @var int|null Общая стоимость по всем объявлениям (в копейках) */
    public ?int $totalPrice = null;
}
