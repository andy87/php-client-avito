<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoParcelHistory.
 */
class GetSandboxParcelInfoParcelHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'event' => 'event', 'location' => 'location', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['location'];

    protected const CASTS = [];

    /** @var string|null Schema field date */
    public ?string $date = null;

    /** @var string|null Schema field event */
    public ?string $event = null;

    /** @var string|null Schema field location */
    public ?string $location = null;

    /** @var string|null Schema field status */
    public ?string $status = null;
}
