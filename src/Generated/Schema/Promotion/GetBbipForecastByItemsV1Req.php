<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipForecastByItemsV1Req.
 */
class GetBbipForecastByItemsV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\php_client_avito\Generated\Schema\Promotion\BbipForecastRequestByItemV1::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> Данные по объявлениям для запроса прогноза */
    public array $items;
}
