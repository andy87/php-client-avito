<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API postStockManagement1Info.
 */
class PostStockManagement1InfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\StockManagement\StocksInfoResult::class;

    /** @var array<int, array<string, mixed>>|null Response field stocks */
    public ?array $stocks = null;
}
