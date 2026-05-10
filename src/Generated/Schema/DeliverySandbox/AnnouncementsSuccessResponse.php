<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsSuccessResponse.
 */
class AnnouncementsSuccessResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data', 'error'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
