<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/ordersLabelsResponse.
 */
class OrdersLabelsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['taskID' => 'taskID'];

    protected const REQUIRED_FIELDS = ['taskID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string ID задачи (документа) */
    public string $taskID;
}
