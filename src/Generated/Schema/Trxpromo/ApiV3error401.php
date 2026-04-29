<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Trxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/apiV3error401.
 */
class ApiV3error401 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['unauthenticated' => 'unauthenticated'];

    protected const REQUIRED_FIELDS = ['unauthenticated'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field unauthenticated */
    public array $unauthenticated;
}
