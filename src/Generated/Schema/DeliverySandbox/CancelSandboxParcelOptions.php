<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CancelSandboxParcelOptions.
 */
class CancelSandboxParcelOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cancelationUrl' => 'cancelationUrl'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field cancelationUrl */
    public ?string $cancelationUrl = null;
}
