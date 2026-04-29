<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetProfilePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetProfileV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\Profile\GetResponse;
use Andy87\ClientsAvito\Generated\Response\Autoload\Profile\GetV2Response;

/**
 * Группа методов "profile" раздела Avito API "Автозагрузка".
 */
class ProfileProvider extends BaseAvitoProvider
{
    /**
     * Получение профиля пользователя автозагрузки (deprecated)
     * 
     * Возвращает настройки профиля пользователя автозагрузки.
     * С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfileV2)
     * 
     * OperationId: getProfile.
     * HTTP: GET /autoload/v1/profile.
     *
     * @param GetProfilePrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetProfilePrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Получение профиля пользователя автозагрузки
     * 
     * Возвращает настройки профиля пользователя автозагрузки. С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: getProfileV2.
     * HTTP: GET /autoload/v2/profile.
     *
     * @param GetProfileV2Prompt $prompt DTO запроса.
     *
     * @return GetV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV2(GetProfileV2Prompt $prompt): GetV2Response
    {
        /** @var GetV2Response $response */
        $response = $this->request($prompt, GetV2Response::class);

        return $response;
    }
}
