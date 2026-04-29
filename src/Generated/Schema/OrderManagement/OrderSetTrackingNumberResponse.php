<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderSetTrackingNumberResponse.
 */
class OrderSetTrackingNumberResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error', 'success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;

    /** @var bool|null Флаг успеха обновления */
    public ?bool $success = null;
}
