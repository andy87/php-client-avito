<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Messenger\Images;

use and_y87\php_client_avito\Generated\Prompt\UploadImagesPrompt as BaseUploadImagesPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/uploadImages.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/uploadImages
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property \and_y87\PhpClientSdk\Transport\Http\MultipartFile|string $uploadfile__ Body field uploadfile[]
 */
class UploadPrompt extends BaseUploadImagesPrompt
{
}
