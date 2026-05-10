<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /stock-management/1/info.
 *
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/postStockManagement1Info
 */
class PostStockManagement1InfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\StockManagement\StocksInfoResult::class;

    /** @var array<int, array<string, mixed>>|null Response field stocks */
    public ?array $stocks = null;
}
