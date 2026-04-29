<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /token.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getAccessToken
 */
class GetAccessTokenPrompt2 extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/token';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['grant_type' => 'grant_type', 'client_id' => 'client_id', 'client_secret' => 'client_secret'];

    protected const REQUIRED_FIELDS = ['grant_type', 'client_id', 'client_secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['grant_type', 'client_id', 'client_secret'];

    protected const BODY_FIELDS = [];

    /** @var string Тип OAuth flow – строка client_credentials */
    public string $grant_type;

    /** @var string query-parameter client_id */
    public string $client_id;

    /** @var string query-parameter client_secret */
    public string $client_secret;
}
