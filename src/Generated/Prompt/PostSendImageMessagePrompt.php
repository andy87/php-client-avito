<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/image.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendImageMessage
 */
class PostSendImageMessagePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/image';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['image_id' => 'image_id', 'user_id' => 'user_id', 'chat_id' => 'chat_id'];

    protected const REQUIRED_FIELDS = ['image_id', 'user_id', 'chat_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'chat_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['image_id'];

    /** @var string Идентификатор загруженного изображения */
    public string $image_id;
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter chat_id */
    public string|int $chat_id;
}
