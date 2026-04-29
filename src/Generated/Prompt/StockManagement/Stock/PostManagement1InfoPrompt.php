<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\StockManagement\Stock;

use Andy87\ClientsAvito\Generated\Prompt\PostStockManagement1InfoPrompt as BasePostStockManagement1InfoPrompt;

/**
 * Класс данных запроса Avito API [POST] /stock-management/1/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/stock-management/documentation#operation/postStockManagement1Info
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, int> $item_ids Body field item_ids
 * @property bool|null $strong_consistency Пропустить поход в кеш, отдать данные из базы
 */
class PostManagement1InfoPrompt extends BasePostStockManagement1InfoPrompt
{
}
