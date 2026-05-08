<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendMessage
 */
class PostSendMessagePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/messenger/v1/accounts/{user_id}/chats/{chat_id}/messages';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['message' => 'message', 'type' => 'type', 'user_id' => 'user_id', 'chat_id' => 'chat_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'chat_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'chat_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['message', 'type'];

    /** @var array<string, mixed>|null Body field message */
    public ?array $message = null;

    /** @var string|null Тип сообщения */
    public ?string $type = null;
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter chat_id */
    public string|int $chat_id;
}
