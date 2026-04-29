<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Auth;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito auth/GetTokenRequest.
 */
class GetTokenRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['client_id' => 'client_id', 'client_secret' => 'client_secret', 'grant_type' => 'grant_type'];

    protected const REQUIRED_FIELDS = ['grant_type', 'client_id', 'client_secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field client_id */
    public string $client_id;

    /** @var string Schema field client_secret */
    public string $client_secret;

    /** @var string Schema field grant_type */
    public string $grant_type;
}
