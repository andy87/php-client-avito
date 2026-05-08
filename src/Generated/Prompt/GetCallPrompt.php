<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpa/v1/call/{call_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCall
 */
class GetCallPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/cpa/v1/call/{call_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['call_id' => 'call_id'];

    protected const REQUIRED_FIELDS = ['call_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['call_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter call_id */
    public string|int $call_id;
}
