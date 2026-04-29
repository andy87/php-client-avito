<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API get_record_by_call_id.
 */
class GetRecordByCallIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/calltracking/v1/getRecordByCallId/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['callId' => 'callId'];

    protected const REQUIRED_FIELDS = ['callId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['callId'];

    protected const BODY_FIELDS = [];

    /** @var int Идентификатор звонка */
    public int $callId;
}
