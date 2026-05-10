<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Messenger\Voice;

use php_client_avito\Generated\Response\GetVoiceFilesResponse as BaseGetVoiceFilesResponse;

/**
 * Ответ Avito API [GET] /messenger/v1/accounts/{user_id}/getVoiceFiles.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getVoiceFiles
 *
 * @property array<string, mixed>|null $voices_urls Response field voices_urls
 */
class GetFilesResponse extends BaseGetVoiceFilesResponse
{
}
