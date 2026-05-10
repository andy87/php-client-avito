<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\StockManagement\Stock;

use php_client_avito\Generated\Prompt\PostStockManagement1InfoPrompt as BasePostStockManagement1InfoPrompt;

/**
 * Класс данных запроса Avito API [POST] /stock-management/1/info.
 *
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/postStockManagement1Info
 *
 * @property array<int, int> $item_ids Body field item_ids
 * @property bool|null $strong_consistency Пропустить поход в кеш, отдать данные из базы
 */
class PostManagement1InfoPrompt extends BasePostStockManagement1InfoPrompt
{
}
