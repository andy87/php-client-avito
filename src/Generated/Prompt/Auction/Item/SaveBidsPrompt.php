<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Auction\Item;

use Andy87\ClientsAvito\Generated\Prompt\SaveItemBidsPrompt as BaseSaveItemBidsPrompt;

/**
 * Класс данных запроса Avito API [POST] /auction/1/bids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/auction/documentation#operation/saveItemBids
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, array<string, mixed>> $items Body field items
 */
class SaveBidsPrompt extends BaseSaveItemBidsPrompt
{
}
