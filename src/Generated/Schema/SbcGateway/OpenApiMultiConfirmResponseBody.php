<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\SbcGateway;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiMultiConfirmResponseBody.
 */
class OpenApiMultiConfirmResponseBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ok' => 'ok'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Schema field ok */
    public ?bool $ok = null;
}
