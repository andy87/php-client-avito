<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\AccountsHierarchy;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetEmployeesV1Prompt;
use php_client_avito\Generated\Response\AccountsHierarchy\Employees\GetV1Response;

/**
 * Группа методов "employees" раздела Avito API "Иерархия Аккаунтов".
 */
class EmployeesProvider extends BaseAvitoProvider
{
    /**
     * Получение списка сотрудников иерархии
     *
     * Для взаимодействия с иерархией аккаунтов необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     *
     * OperationId: getEmployeesV1.
     * HTTP: GET /getEmployeesV1.
     *
     * @param GetEmployeesV1Prompt $prompt DTO запроса.
     *
     * @return GetV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV1(GetEmployeesV1Prompt $prompt): GetV1Response
    {
        /** @var GetV1Response $response */
        $response = $this->request($prompt, GetV1Response::class);

        return $response;
    }
}
