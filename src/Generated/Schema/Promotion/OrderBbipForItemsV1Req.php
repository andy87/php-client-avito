<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderBbipForItemsV1Req.
 */
class OrderBbipForItemsV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\php_client_avito\Generated\Schema\Promotion\BbipOrderByItemV1::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\BbipOrderByItemV1> Заявки на подключение BBIP по отдельным объявлениям */
    public array $items;
}
