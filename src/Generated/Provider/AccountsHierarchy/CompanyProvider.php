<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\AccountsHierarchy;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ListCompanyPhonesV1Prompt;
use Andy87\ClientsAvito\Generated\Response\AccountsHierarchy\Company\ListPhonesV1Response;

/**
 * Группа методов "company" раздела Avito API "Иерархия Аккаунтов".
 */
class CompanyProvider extends BaseAvitoProvider
{
    /**
     * Получение списка телефонов компании
     * 
     * Для взаимодействия с иерархией аккаунтов необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: listCompanyPhonesV1.
     * HTTP: GET /listCompanyPhonesV1.
     *
     * @param ListCompanyPhonesV1Prompt $prompt DTO запроса.
     *
     * @return ListPhonesV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function listPhonesV1(ListCompanyPhonesV1Prompt $prompt): ListPhonesV1Response
    {
        /** @var ListPhonesV1Response $response */
        $response = $this->request($prompt, ListPhonesV1Response::class);

        return $response;
    }
}
