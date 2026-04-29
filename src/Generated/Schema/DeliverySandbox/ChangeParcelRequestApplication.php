<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelRequestApplication.
 */
class ChangeParcelRequestApplication extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['kind' => 'kind', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field kind */
    public ?string $kind = null;

    /** @var string|null Schema field name */
    public ?string $name = null;

    /** @var array<int, string>|null Schema field phones */
    public ?array $phones = null;
}
