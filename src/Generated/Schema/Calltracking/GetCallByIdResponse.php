<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Calltracking;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/GetCallByIdResponse.
 */
class GetCallByIdResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['call' => 'call', 'error' => 'error'];

    protected const REQUIRED_FIELDS = ['call', 'error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['call' => \and_y87\php_client_avito\Generated\Schema\Calltracking\Call::class, 'error' => \and_y87\php_client_avito\Generated\Schema\Calltracking\Error::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Calltracking\Call Schema field call */
    public \and_y87\php_client_avito\Generated\Schema\Calltracking\Call $call;

    /** @var \and_y87\php_client_avito\Generated\Schema\Calltracking\Error Schema field error */
    public \and_y87\php_client_avito\Generated\Schema\Calltracking\Error $error;
}
