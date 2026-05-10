<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Messenger;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\UploadImagesPrompt;
use and_y87\php_client_avito\Generated\Response\Messenger\Images\UploadResponse;

/**
 * Группа методов "images" раздела Avito API "Мессенджер".
 */
class ImagesProvider extends BaseAvitoProvider
{
    /**
     * Загрузка изображений
     *
     * Метод используется для загрузки изображений в формате JPEG, HEIC, GIF, BMP или PNG.
     *
     * Особенности работы с загрузкой изображений:
     * - Метод поддерживает только одиночные изображения; для загрузки нескольких картинок необходимо сделать несколько запросов;
     * - Максимальный размер файла — 24 МБ;
     * - Максимальное разрешение — 75 мегапиксилей;
     *
     * OperationId: uploadImages.
     * HTTP: POST /messenger/v1/accounts/{user_id}/uploadImages.
     *
     * @param UploadImagesPrompt $prompt DTO запроса.
     *
     * @return UploadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function upload(UploadImagesPrompt $prompt): UploadResponse
    {
        /** @var UploadResponse $response */
        $response = $this->request($prompt, UploadResponse::class);

        return $response;
    }
}
