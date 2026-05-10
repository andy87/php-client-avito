<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipForecastByItemsV1Resp.
 */
class GetBbipForecastByItemsV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\php_client_avito\Generated\Schema\Promotion\BbipForecastByItemV1::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках по объявлениям */
    public array $errors;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\BbipForecastByItemV1> Прогноз по каждому объявлению */
    public array $items;

    /** @var int|null Общая стоимость по всем объявлениям (в копейках) */
    public ?int $totalPrice = null;
}
