<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/Error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message', 'payload' => 'payload'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['payload' => \Andy87\ClientsAvito\Generated\Schema\Cpa\ErrorPayload::class];

    /** @var int Internal error code */
    public int $code;

    /** @var string Human readable error text */
    public string $message;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\ErrorPayload|null Schema field payload */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\ErrorPayload $payload = null;
}
