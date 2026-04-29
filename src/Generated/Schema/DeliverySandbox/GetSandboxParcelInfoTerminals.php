<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoTerminals.
 */
class GetSandboxParcelInfoTerminals extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['approximate' => 'approximate', 'real' => 'real'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['real'];

    protected const CASTS = [];

    /** @var string|null Schema field approximate */
    public ?string $approximate = null;

    /** @var string|null Schema field real */
    public ?string $real = null;
}
