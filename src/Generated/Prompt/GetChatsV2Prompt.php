<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v2/accounts/{user_id}/chats.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatsV2
 */
class GetChatsV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/messenger/v2/accounts/{user_id}/chats';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['item_ids' => ['style' => 'form', 'explode' => true], 'unread_only' => ['style' => 'form', 'explode' => true], 'chat_types' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true], 'offset' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_ids' => 'item_ids', 'unread_only' => 'unread_only', 'chat_types' => 'chat_types', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['user_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = ['item_ids', 'unread_only', 'chat_types', 'limit', 'offset'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var array<int, int>|null Получение чатов только по объявлениям с указанными item_id */
    public ?array $item_ids = null;

    /** @var bool|null При значении true метод возвращает только непрочитанные чаты */
    public ?bool $unread_only = null;

    /** @var array<int, string>|null Фильтрация возвращаемых чатов.
* u2i — чаты по объявлениям;
* u2u — чаты между пользователями;
* a2u — чаты между пользователями и Авито;
 */
    public ?array $chat_types = null;

    /** @var int|null Количество сообщений / чатов для запроса */
    public ?int $limit = null;

    /** @var int|null Сдвиг сообщений / чатов для запроса */
    public ?int $offset = null;
}
