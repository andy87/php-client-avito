<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Trxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/apiV3error400.
 */
class ApiV3error400 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bad_request' => 'bad-request'];

    protected const REQUIRED_FIELDS = ['bad_request'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field bad-request */
    public array $bad_request;
}
