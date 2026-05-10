<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Calltracking;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/GetCallsResponse.
 */
class GetCallsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calls' => 'calls', 'error' => 'error'];

    protected const REQUIRED_FIELDS = ['calls', 'error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['calls' => [\and_y87\php_client_avito\Generated\Schema\Calltracking\Call::class], 'error' => \and_y87\php_client_avito\Generated\Schema\Calltracking\Error::class];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Calltracking\Call> Schema field calls */
    public array $calls;

    /** @var \and_y87\php_client_avito\Generated\Schema\Calltracking\Error Schema field error */
    public \and_y87\php_client_avito\Generated\Schema\Calltracking\Error $error;
}
