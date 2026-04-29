<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipForecastByItemsV1Req.
 */
class GetBbipForecastByItemsV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> Данные по объявлениям для запроса прогноза */
    public array $items;
}
