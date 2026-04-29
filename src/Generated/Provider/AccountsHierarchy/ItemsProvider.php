<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\AccountsHierarchy;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\LinkItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\ListItemsByEmployeeIdV1Prompt;
use Andy87\ClientsAvito\Generated\Response\AccountsHierarchy\Items\LinkV1Response;
use Andy87\ClientsAvito\Generated\Response\AccountsHierarchy\Items\ListByEmployeeIdV1Response;

/**
 * Группа методов "items" раздела Avito API "Иерархия Аккаунтов".
 */
class ItemsProvider extends BaseAvitoProvider
{
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
     * @return LinkV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function linkV1(LinkItemsV1Prompt $prompt): LinkV1Response
    {
        /** @var LinkV1Response $response */
        $response = $this->request($prompt, LinkV1Response::class);

        return $response;
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
     * @return ListByEmployeeIdV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function listByEmployeeIdV1(ListItemsByEmployeeIdV1Prompt $prompt): ListByEmployeeIdV1Response
    {
        /** @var ListByEmployeeIdV1Response $response */
        $response = $this->request($prompt, ListByEmployeeIdV1Response::class);

        return $response;
    }
}
