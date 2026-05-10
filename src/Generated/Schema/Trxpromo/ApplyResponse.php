<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Trxpromo;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/ApplyResponse.
 */
class ApplyResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = ['success'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field success */
    public array $success;
}
