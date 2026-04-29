<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\StockManagement\Stock;

use Andy87\ClientsAvito\Generated\Prompt\PutStockManagement1StocksPrompt as BasePutStockManagement1StocksPrompt;

/**
 * Класс данных запроса Avito API [PUT] /stock-management/1/stocks.
 * 
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/putStockManagement1Stocks
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, array<string, mixed>> $stocks Body field stocks
 */
class PutManagement1StocksPrompt extends BasePutStockManagement1StocksPrompt
{
}
