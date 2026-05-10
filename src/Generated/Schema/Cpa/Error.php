<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/Error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message', 'payload' => 'payload'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['payload' => \php_client_avito\Generated\Schema\Cpa\ErrorPayload::class];

    /** @var int Internal error code */
    public int $code;

    /** @var string Human readable error text */
    public string $message;

    /** @var \php_client_avito\Generated\Schema\Cpa\ErrorPayload|null Schema field payload */
    public ?\php_client_avito\Generated\Schema\Cpa\ErrorPayload $payload = null;
}
