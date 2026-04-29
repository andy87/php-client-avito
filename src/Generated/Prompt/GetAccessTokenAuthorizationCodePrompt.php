<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getAccessTokenAuthorizationCode.
 */
class GetAccessTokenAuthorizationCodePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/token‎';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['client_id' => 'client_id', 'client_secret' => 'client_secret', 'code' => 'code', 'grant_type' => 'grant_type'];

    protected const REQUIRED_FIELDS = ['client_id', 'client_secret', 'code', 'grant_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['client_id', 'client_secret', 'code', 'grant_type'];

    /** @var string Body field client_id */
    public string $client_id;

    /** @var string Body field client_secret */
    public string $client_secret;

    /** @var string Body field code */
    public string $code;

    /** @var string Body field grant_type */
    public string $grant_type;
}
