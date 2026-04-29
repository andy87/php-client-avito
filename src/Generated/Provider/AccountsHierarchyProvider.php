<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CheckAhUserV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetEmployeesV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\LinkItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\ListCompanyPhonesV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\ListItemsByEmployeeIdV1Prompt;
use Andy87\ClientsAvito\Generated\Response\CheckAhUserV1Response;
use Andy87\ClientsAvito\Generated\Response\GetEmployeesV1Response;
use Andy87\ClientsAvito\Generated\Response\LinkItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\ListCompanyPhonesV1Response;
use Andy87\ClientsAvito\Generated\Response\ListItemsByEmployeeIdV1Response;

/**
 * Provider раздела Avito API "Иерархия Аккаунтов".
 * @property-read AccountsHierarchy\AhProvider $ah
 * @property-read AccountsHierarchy\CompanyProvider $company
 * @property-read AccountsHierarchy\EmployeesProvider $employees
 * @property-read AccountsHierarchy\ItemsProvider $items
 *
 */
class AccountsHierarchyProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'ah' => AccountsHierarchy\AhProvider::class,
        'company' => AccountsHierarchy\CompanyProvider::class,
        'employees' => AccountsHierarchy\EmployeesProvider::class,
        'items' => AccountsHierarchy\ItemsProvider::class,
    ];

    /**
     * Получение информации о статусе пользователя в ИА
     * 
     * Ручка для получения информации по ИА для пользователя
     * 
     * OperationId: checkAhUserV1.
     * HTTP: GET /checkAhUserV1.
     *
     * @param CheckAhUserV1Prompt $prompt DTO запроса.
     *
     * @return CheckAhUserV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkAhUserV1(CheckAhUserV1Prompt $prompt): CheckAhUserV1Response
    {
        /** @var AccountsHierarchy\AhProvider $group */
        $group = $this->operationGroup('ah');

        return $group->checkUserV1($prompt);
    }

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
     * @return GetEmployeesV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployeesV1(GetEmployeesV1Prompt $prompt): GetEmployeesV1Response
    {
        /** @var AccountsHierarchy\EmployeesProvider $group */
        $group = $this->operationGroup('employees');

        return $group->getV1($prompt);
    }

    /**
     * Прикрепление сотрудника иерархии к объявлениям, перезакрепление объявлений между сотрудниками иерархии
     * 
     * Для взаимодействия с иерархией аккаунтов необходимо приобрести тариф в [личном кабинете](https://www.avito.ru/paid-services/listing-fees).
     * 
     * OperationId: linkItemsV1.
     * HTTP: POST /linkItemsV1.
     *
     * @param LinkItemsV1Prompt $prompt DTO запроса.
     *
     * @return LinkItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function linkItemsV1(LinkItemsV1Prompt $prompt): LinkItemsV1Response
    {
        /** @var AccountsHierarchy\ItemsProvider $group */
        $group = $this->operationGroup('items');

        return $group->linkV1($prompt);
    }

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
     * @return ListCompanyPhonesV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function listCompanyPhonesV1(ListCompanyPhonesV1Prompt $prompt): ListCompanyPhonesV1Response
    {
        /** @var AccountsHierarchy\CompanyProvider $group */
        $group = $this->operationGroup('company');

        return $group->listPhonesV1($prompt);
    }

    /**
     * Получение списка объявлений по сотруднику
     * 
     * Ручка для получения списка объявлений по сотруднику с фильтром по категории объявлений. Получение объявлений по компании недоступно.
     * 
     * OperationId: listItemsByEmployeeIdV1.
     * HTTP: POST /listItemsByEmployeeIdV1.
     *
     * @param ListItemsByEmployeeIdV1Prompt $prompt DTO запроса.
     *
     * @return ListItemsByEmployeeIdV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function listItemsByEmployeeIdV1(ListItemsByEmployeeIdV1Prompt $prompt): ListItemsByEmployeeIdV1Response
    {
        /** @var AccountsHierarchy\ItemsProvider $group */
        $group = $this->operationGroup('items');

        return $group->listByEmployeeIdV1($prompt);
    }
}
