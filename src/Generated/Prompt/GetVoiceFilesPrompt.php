<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v1/accounts/{user_id}/getVoiceFiles.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getVoiceFiles
 */
class GetVoiceFilesPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/messenger/v1/accounts/{user_id}/getVoiceFiles';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['user_id' => 'user_id'];

    protected const REQUIRED_FIELDS = ['user_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter user_id */
    public string|int $user_id;
}
