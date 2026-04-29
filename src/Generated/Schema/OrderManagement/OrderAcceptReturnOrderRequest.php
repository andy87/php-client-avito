<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderAcceptReturnOrderRequest.
 */
class OrderAcceptReturnOrderRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'recipient' => 'recipient', 'terminalNumber' => 'terminalNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var array<string, mixed>|null Данные человека, который будет забирать возвратную посылку */
    public ?array $recipient = null;

    /** @var string|null Номер отделения Почты России, куда придёт возвратная посылка. */
    public ?string $terminalNumber = null;
}
