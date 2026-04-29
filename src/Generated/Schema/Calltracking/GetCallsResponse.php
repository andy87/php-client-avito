<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Calltracking;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/GetCallsResponse.
 */
class GetCallsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calls' => 'calls', 'error' => 'error'];

    protected const REQUIRED_FIELDS = ['calls', 'error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['calls' => [\Andy87\ClientsAvito\Generated\Schema\Calltracking\Call::class], 'error' => \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Calltracking\Call> Schema field calls */
    public array $calls;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error Schema field error */
    public \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error $error;
}
