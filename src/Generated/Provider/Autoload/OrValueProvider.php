<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoload;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateOrUpdateProfilePrompt;
use Andy87\ClientsAvito\Generated\Prompt\CreateOrUpdateProfileV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Autoload\OrValue\CreateUpdateProfileResponse;
use Andy87\ClientsAvito\Generated\Response\Autoload\OrValue\CreateUpdateProfileV2Response;

/**
 * Группа методов "orValue" раздела Avito API "Автозагрузка".
 */
class OrValueProvider extends BaseAvitoProvider
{
    /**
     * Создание/редактирование настроек профиля пользователя автозагрузки (deprecated)
     * 
     * Предназначен для создания и управления профилем автозагрузки. Если профиля еще не существует - через этот метод можно его создать. 
     * 
     * С 23.12.2024 вместо поля upload_url используйте поле feeds_data. В нём содержится название файла и ссылка на него. [Новая версия](https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfileV2)
     * 
     * OperationId: createOrUpdateProfile.
     * HTTP: POST /autoload/v1/profile.
     *
     * @param CreateOrUpdateProfilePrompt $prompt DTO запроса.
     *
     * @return CreateUpdateProfileResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createUpdateProfile(CreateOrUpdateProfilePrompt $prompt): CreateUpdateProfileResponse
    {
        /** @var CreateUpdateProfileResponse $response */
        $response = $this->request($prompt, CreateUpdateProfileResponse::class);

        return $response;
    }

    /**
     * Создание/редактирование настроек профиля пользователя автозагрузки
     * 
     * Предназначен для создания и управления профилем автозагрузки. Если профиля еще не существует - через этот метод можно его создать. С 23.12.2024 вместо поля feed_url используйте поле feeds_data. В нём содержится название файла и ссылка на него.
     * 
     * OperationId: createOrUpdateProfileV2.
     * HTTP: POST /autoload/v2/profile.
     *
     * @param CreateOrUpdateProfileV2Prompt $prompt DTO запроса.
     *
     * @return CreateUpdateProfileV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createUpdateProfileV2(CreateOrUpdateProfileV2Prompt $prompt): CreateUpdateProfileV2Response
    {
        /** @var CreateUpdateProfileV2Response $response */
        $response = $this->request($prompt, CreateUpdateProfileV2Response::class);

        return $response;
    }
}
