<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = ['stocks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['stocks'];

    protected const BODY_ROOT_FIELD = null;

    /** @var array<int, array<string, mixed>> Body field stocks */
    public array $stocks;
}
