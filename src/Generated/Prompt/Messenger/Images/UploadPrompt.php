<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Images;

use Andy87\ClientsAvito\Generated\Prompt\UploadImagesPrompt as BaseUploadImagesPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/uploadImages.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/uploadImages
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property \Andy87\ClientsBase\Http\MultipartFile|string $uploadfile__ Body field uploadfile[]
 */
class UploadPrompt extends BaseUploadImagesPrompt
{
}
