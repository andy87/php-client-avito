<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Calltracking;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/GetCallByIdResponse.
 */
class GetCallByIdResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['call' => 'call', 'error' => 'error'];

    protected const REQUIRED_FIELDS = ['call', 'error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['call' => \Andy87\ClientsAvito\Generated\Schema\Calltracking\Call::class, 'error' => \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Calltracking\Call Schema field call */
    public \Andy87\ClientsAvito\Generated\Schema\Calltracking\Call $call;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error Schema field error */
    public \Andy87\ClientsAvito\Generated\Schema\Calltracking\Error $error;
}
