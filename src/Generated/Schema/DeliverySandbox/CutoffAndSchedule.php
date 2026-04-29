<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/cutoffAndSchedule.
 */
class CutoffAndSchedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cutoff' => 'cutoff', 'regularSchedule' => 'regularSchedule'];

    protected const REQUIRED_FIELDS = ['cutoff', 'regularSchedule'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['regularSchedule' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var array<string, mixed> Schema field cutoff */
    public array $cutoff;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule Schema field regularSchedule */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule $regularSchedule;
}
