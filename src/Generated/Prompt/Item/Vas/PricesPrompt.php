<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Vas;

use Andy87\ClientsAvito\Generated\Prompt\VasPricesPrompt as BaseVasPricesPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{userId}/vas/prices.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/vasPrices
 * 
 * @property array<int, int> $itemIds Набор идентификаторов объявлений на сайте
 */
class PricesPrompt extends BaseVasPricesPrompt
{
}
