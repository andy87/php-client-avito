<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterGet.
 */
class SortingCenterGet extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['data' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterGetData::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterGetData>|null Schema field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
