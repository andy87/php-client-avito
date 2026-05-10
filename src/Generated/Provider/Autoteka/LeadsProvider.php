<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Autoteka;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetLeadsPrompt;
use php_client_avito\Generated\Response\Autoteka\Leads\GetResponse;

/**
 * Группа методов "leads" раздела Avito API "Автотека".
 */
class LeadsProvider extends BaseAvitoProvider
{
    /**
     * Получение событий сервиса Сигнал
     *
     * Метод получения событий сервиса Сигнал
     *
     * OperationId: getLeads.
     * HTTP: POST /autoteka/v1/get-leads/.
     *
     * @param GetLeadsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetLeadsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
