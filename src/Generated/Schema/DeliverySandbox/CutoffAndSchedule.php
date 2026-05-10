<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/cutoffAndSchedule.
 */
class CutoffAndSchedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cutoff' => 'cutoff', 'regularSchedule' => 'regularSchedule'];

    protected const REQUIRED_FIELDS = ['cutoff', 'regularSchedule'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['regularSchedule' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var array<string, mixed> Schema field cutoff */
    public array $cutoff;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule Schema field regularSchedule */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule $regularSchedule;
}
