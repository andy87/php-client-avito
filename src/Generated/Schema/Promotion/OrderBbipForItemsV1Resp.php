<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderBbipForItemsV1Resp.
 */
class OrderBbipForItemsV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['errors'];

    protected const NULLABLE_FIELDS = ['orderId'];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках по объявлениям */
    public array $errors;

    /** @var string|null Идентификатор созданной заявки на подключение услуг продвижения */
    public ?string $orderId = null;
}
