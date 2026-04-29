<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Messenger\Chat;

use Andy87\ClientsAvito\Generated\Response\GetChatByIdV2Response as BaseGetChatByIdV2Response;

/**
 * Ответ Avito API [GET] /messenger/v2/accounts/{user_id}/chats/{chat_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatByIdV2
 * 
 * @property array<string, mixed>|null $context Сопутствующая к чату информация, несвязанная с мессенджером напрямую
 * @property int|null $created Unix-timestamp времени создания чата
 * @property string|null $id Уникальный идентификтор чата
 * @property array<string, mixed>|null $last_message Response field last_message
 * @property int|null $updated Unix-timestamp времени последнего обновления чата
 * @property array<int, array<string, mixed>>|null $users Response field users
 */
class GetByIdV2Response extends BaseGetChatByIdV2Response
{
}
