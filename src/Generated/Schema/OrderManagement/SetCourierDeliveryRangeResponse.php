<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\OrderManagement;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/setCourierDeliveryRangeResponse.
 */
class SetCourierDeliveryRangeResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Флаг успеха выбора времени приезда курьера */
    public ?bool $success = null;
}
