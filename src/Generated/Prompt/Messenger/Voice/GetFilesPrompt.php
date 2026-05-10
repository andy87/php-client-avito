<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Messenger\Voice;

use php_client_avito\Generated\Prompt\GetVoiceFilesPrompt as BaseGetVoiceFilesPrompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v1/accounts/{user_id}/getVoiceFiles.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getVoiceFiles
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property array<int, string> $voice_ids Получение файлов голосовых сообщений с указанными voice_id
 */
class GetFilesPrompt extends BaseGetVoiceFilesPrompt
{
}
