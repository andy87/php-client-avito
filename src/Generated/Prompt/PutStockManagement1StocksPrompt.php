<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /stock-management/1/stocks.
 * 
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/putStockManagement1Stocks
 */
class PutStockManagement1StocksPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/stock-management/1/stocks';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = ['Authorization', 'stocks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['stocks'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, array<string, mixed>> Body field stocks */
    public array $stocks;
}
