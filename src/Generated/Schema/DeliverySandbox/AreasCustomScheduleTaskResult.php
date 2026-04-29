<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
