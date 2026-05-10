<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelReply.
 */
class CreateParcelReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['error' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError::class];

    /** @var array<string, mixed>|null Schema field data */
    public ?array $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError|null Schema field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError $error = null;
}
