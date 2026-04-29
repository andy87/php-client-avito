<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [PUT] /stock-management/1/stocks.
 * 
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/putStockManagement1Stocks
 */
class PutStockManagement1StocksResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\StockManagement\StockEditResult::class;

    /** @var array<int, array<string, mixed>>|null Response field stocks */
    public ?array $stocks = null;
}
