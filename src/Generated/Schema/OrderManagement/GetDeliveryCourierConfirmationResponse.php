<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/getDeliveryCourierConfirmationResponse.
 */
class GetDeliveryCourierConfirmationResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['status', 'result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Данные для отображения виджета подтверждения заказа продавцом */
    public array $result;

    /** @var string Schema field status */
    public string $status;
}
