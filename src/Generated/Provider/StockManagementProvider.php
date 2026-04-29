<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostStockManagement1InfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PutStockManagement1StocksPrompt;
use Andy87\ClientsAvito\Generated\Response\PostStockManagement1InfoResponse;
use Andy87\ClientsAvito\Generated\Response\PutStockManagement1StocksResponse;

/**
 * Provider раздела Avito API "Управление остатками".
 * @property-read StockManagement\StockProvider $stock
 *
 */
class StockManagementProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'stock' => StockManagement\StockProvider::class,
    ];

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
     * @return PostStockManagement1InfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postStockManagement1Info(PostStockManagement1InfoPrompt $prompt): PostStockManagement1InfoResponse
    {
        /** @var StockManagement\StockProvider $group */
        $group = $this->operationGroup('stock');

        return $group->postManagement1Info($prompt);
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
     * @return PutStockManagement1StocksResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putStockManagement1Stocks(PutStockManagement1StocksPrompt $prompt): PutStockManagement1StocksResponse
    {
        /** @var StockManagement\StockProvider $group */
        $group = $this->operationGroup('stock');

        return $group->putManagement1Stocks($prompt);
    }
}
