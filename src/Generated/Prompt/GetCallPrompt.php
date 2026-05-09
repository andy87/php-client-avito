<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Source' => 'X-Source', 'call_id' => 'call_id'];

    protected const REQUIRED_FIELDS = ['X_Source', 'call_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['call_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Source'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Имя сервиса, отправляющего запрос */
    public string $X_Source;

    /** @var int Идентификатор звонка */
    public int $call_id;
}
