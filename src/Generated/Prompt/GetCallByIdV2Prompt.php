<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/callById.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallByIdV2
 */
class GetCallByIdV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v2/callById';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['callId' => 'callId'];

    protected const REQUIRED_FIELDS = ['callId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['callId'];

    /** @var int Идентификатор звонка */
    public int $callId;
}
