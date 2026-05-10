<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AreasCustomScheduleTaskResult.
 */
class AreasCustomScheduleTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['uploaded' => 'uploaded'];

    protected const REQUIRED_FIELDS = ['uploaded'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field uploaded */
    public string $uploaded;
}
