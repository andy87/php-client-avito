<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Item;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetItemsInfoPrompt;
use php_client_avito\Generated\Response\Item\Items\GetInfoResponse;

/**
 * Группа методов "items" раздела Avito API "Объявления".
 */
class ItemsProvider extends BaseAvitoProvider
{
    /**
     * Получение информации по объявлениям
     *
     * Возвращает список объявлений авторизованного пользователя - статус, категорию и ссылку на сайте.
     * **Внимание! В настоящий момент этот метод не работает с объявлениями [сотрудников](https://pro.avito.ru/employees).** Он позволяет получить объявления только для пользователя, который указан владельцем этого объявления. В случае сотрудника это будет главный аккаунт компании, для авторизованного сотрудника вернётся пустой список объявлений.
     * Максимальное количество запросов в минуту - 25.
     *
     * OperationId: getItemsInfo.
     * HTTP: GET /core/v1/items.
     *
     * @param GetItemsInfoPrompt $prompt DTO запроса.
     *
     * @return GetInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInfo(GetItemsInfoPrompt $prompt): GetInfoResponse
    {
        /** @var GetInfoResponse $response */
        $response = $this->request($prompt, GetInfoResponse::class);

        return $response;
    }
}
