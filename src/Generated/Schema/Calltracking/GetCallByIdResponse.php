<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Calltracking;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/GetCallByIdResponse.
 */
class GetCallByIdResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['call' => 'call', 'error' => 'error'];

    protected const REQUIRED_FIELDS = ['call', 'error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['call' => \php_client_avito\Generated\Schema\Calltracking\Call::class, 'error' => \php_client_avito\Generated\Schema\Calltracking\Error::class];

    /** @var \php_client_avito\Generated\Schema\Calltracking\Call Schema field call */
    public \php_client_avito\Generated\Schema\Calltracking\Call $call;

    /** @var \php_client_avito\Generated\Schema\Calltracking\Error Schema field error */
    public \php_client_avito\Generated\Schema\Calltracking\Error $error;
}
