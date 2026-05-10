<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Trxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
