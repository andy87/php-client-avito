<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v3/accounts/{user_id}/chats/{chat_id}/messages/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getMessagesV3
 */
class GetMessagesV3Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/messenger/v3/accounts/{user_id}/chats/{chat_id}/messages/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['user_id' => 'user_id', 'chat_id' => 'chat_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'chat_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'chat_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter chat_id */
    public string|int $chat_id;
}
