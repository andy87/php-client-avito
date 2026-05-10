<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ListOrdersByUserV1Resp.
 */
class ListOrdersByUserV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orders' => 'orders', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['orders', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orders' => [\php_client_avito\Generated\Schema\Promotion\OrderBrief::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\OrderBrief> Список заявок на подключение услуг продвижения по объявлениям */
    public array $orders;

    /** @var array<string, mixed> Данные для постраничного чтения */
    public array $pagination;
}
