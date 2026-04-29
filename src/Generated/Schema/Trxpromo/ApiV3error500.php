<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Trxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/apiV3error500.
 */
class ApiV3error500 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['internal_error' => 'internal-error'];

    protected const REQUIRED_FIELDS = ['internal_error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field internal-error */
    public array $internal_error;
}
