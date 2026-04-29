<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderApplyTransitionRequest.
 */
class OrderApplyTransitionRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'params' => 'params', 'transition' => 'transition'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['params'];

    protected const CASTS = [];

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var array<string, mixed>|null Дополнительные параметры доставки */
    public ?array $params = null;

    /** @var string|null Название перехода. 
  * `confirm` - подтверждение заказа;
  * `reject` - отмена заказа;
  * `perform` - подтверждение отправки заказа (RDBS);
  * `receive` - подтверждение доставки заказа (RDBS, CNC).
 */
    public ?string $transition = null;
}
