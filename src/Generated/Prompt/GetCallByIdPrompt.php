<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /calltracking/v1/getCallById/.
 *
 * @documentation https://developers.avito.ru/api-catalog/calltracking/documentation#operation/get_call_by_id
 */
class GetCallByIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/calltracking/v1/getCallById/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['callId' => 'callId'];

    protected const REQUIRED_FIELDS = ['callId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['callId'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Body field callId */
    public int $callId;
}
