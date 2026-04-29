<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Trxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/apiV3error403.
 */
class ApiV3error403 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['forbidden' => 'forbidden'];

    protected const REQUIRED_FIELDS = ['forbidden'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field forbidden */
    public array $forbidden;
}
