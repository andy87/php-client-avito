<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancy/dict/{dictionary_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/getDictByID
 */
class GetDictByIDPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v2/vacancy/dict/{dictionary_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['dictionary_id' => 'dictionary_id'];

    protected const REQUIRED_FIELDS = ['dictionary_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['dictionary_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter dictionary_id */
    public string|int $dictionary_id;
}
