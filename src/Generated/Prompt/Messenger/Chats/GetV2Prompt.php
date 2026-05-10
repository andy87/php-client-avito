<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Messenger\Chats;

use php_client_avito\Generated\Prompt\GetChatsV2Prompt as BaseGetChatsV2Prompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v2/accounts/{user_id}/chats.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatsV2
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property array<int, int>|null $item_ids Получение чатов только по объявлениям с указанными item_id
 * @property bool|null $unread_only При значении true метод возвращает только непрочитанные чаты
 * @property array<int, string>|null $chat_types Фильтрация возвращаемых чатов. * u2i — чаты по объявлениям; * u2u — чаты между пользователями; * a2u — чаты между пользователями и Авито;
 * @property int|null $limit Количество сообщений / чатов для запроса
 * @property int|null $offset Сдвиг сообщений / чатов для запроса
 */
class GetV2Prompt extends BaseGetChatsV2Prompt
{
}
