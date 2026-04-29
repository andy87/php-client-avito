<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\StockManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostStockManagement1InfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PutStockManagement1StocksPrompt;
use Andy87\ClientsAvito\Generated\Response\StockManagement\Stock\PostManagement1InfoResponse;
use Andy87\ClientsAvito\Generated\Response\StockManagement\Stock\PutManagement1StocksResponse;

/**
 * Группа методов "stock" раздела Avito API "Управление остатками".
 */
class StockProvider extends BaseAvitoProvider
{
    /**
     * Получение остатков
     * 
     * Максимальное количество элементов в одном запросе - 10
     * 
     * Максимальное количество запросов в минуту - 100
     * 
     * Возвращает в ответ массив объектов со следующей структурой:
     * - `itemId` - идентификатор объявления
     * - `isUnlimited` - признак неограниченности остатков
     * - `isMultiple` - флаг с подачи или редактирования "Несколько штук в наличии"
     * - `quantity` - доступное количество товара (количество с подачи или редактирования минус бронь)
     * - `isOutOfStock` - признак того, что у объявления закончилось доступное кол-во товара
     * 
     * OperationId: postStockManagement1Info.
     * HTTP: POST /stock-management/1/info.
     *
     * @param PostStockManagement1InfoPrompt $prompt DTO запроса.
     *
     * @return PostManagement1InfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postManagement1Info(PostStockManagement1InfoPrompt $prompt): PostManagement1InfoResponse
    {
        /** @var PostManagement1InfoResponse $response */
        $response = $this->request($prompt, PostManagement1InfoResponse::class);

        return $response;
    }

    /**
     * Редактирование остатков
     * 
     * Максимальное количество элементов в одном запросе - 200
     * 
     * Максимальное количество запросов в минуту - 100
     * 
     * Возвращает в ответ массив объектов со следующей структурой:
     * - `errors` – массив, который содержит информацию о ошибках, возникших при обновлении остатков.
     * - `item_id` – идентификатор объявления, для которого мы обновляем остатки.
     * - `external_id` – идентификатор объявления во внешней системе, для которого мы обновляем остатки.
     * - `success` – флаг, успешно ли прошло обновление остатка для объявления.
     * 
     * OperationId: putStockManagement1Stocks.
     * HTTP: PUT /stock-management/1/stocks.
     *
     * @param PutStockManagement1StocksPrompt $prompt DTO запроса.
     *
     * @return PutManagement1StocksResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putManagement1Stocks(PutStockManagement1StocksPrompt $prompt): PutManagement1StocksResponse
    {
        /** @var PutManagement1StocksResponse $response */
        $response = $this->request($prompt, PutManagement1StocksResponse::class);

        return $response;
    }
}
