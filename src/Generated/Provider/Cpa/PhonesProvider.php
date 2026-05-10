<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Cpa;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\PhonesInfoFromChatsPrompt;
use php_client_avito\Generated\Response\Cpa\Phones\InfoFromChatsResponse;

/**
 * Группа методов "phones" раздела Avito API "CPA Авито".
 */
class PhonesProvider extends BaseAvitoProvider
{
    /**
     * Информация по номерам телефонов из целевых чатов
     *
     * Получение информации по номерам телефонов из целевых чатов Максимальное количество запросов в минуту - 5.
     *
     * OperationId: phonesInfoFromChats.
     * HTTP: POST /cpa/v1/phonesInfoFromChats.
     *
     * @param PhonesInfoFromChatsPrompt $prompt DTO запроса.
     *
     * @return InfoFromChatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function infoFromChats(PhonesInfoFromChatsPrompt $prompt): InfoFromChatsResponse
    {
        /** @var InfoFromChatsResponse $response */
        $response = $this->request($prompt, InfoFromChatsResponse::class);

        return $response;
    }
}
