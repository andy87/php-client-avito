<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetChangeParcelInfoReplyData.
 */
class GetChangeParcelInfoReplyData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['receiver' => 'receiver', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field receiver */
    public ?array $receiver = null;

    /** @var string|null Schema field status */
    public ?string $status = null;
}
