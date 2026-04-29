<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Auction\User;

use Andy87\ClientsAvito\Generated\Response\GetUserBidsResponse as BaseGetUserBidsResponse;

/**
 * Ответ Avito API [GET] /auction/1/bids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/auction/documentation#operation/getUserBids
 * 
 * @property array<int, array<string, mixed>>|null $items Response field items
 */
class GetBidsResponse extends BaseGetUserBidsResponse
{
}
