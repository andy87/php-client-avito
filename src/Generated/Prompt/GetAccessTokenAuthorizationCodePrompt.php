<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /token.
 *
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/getAccessTokenAuthorizationCode
 */
class GetAccessTokenAuthorizationCodePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/token';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['client_id' => 'client_id', 'client_secret' => 'client_secret', 'code' => 'code', 'grant_type' => 'grant_type'];

    protected const REQUIRED_FIELDS = ['client_id', 'client_secret', 'code', 'grant_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['client_id', 'client_secret', 'code', 'grant_type'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Body field client_id */
    public string $client_id;

    /** @var string Body field client_secret */
    public string $client_secret;

    /** @var string Body field code */
    public string $code;

    /** @var string Body field grant_type */
    public string $grant_type;
}
