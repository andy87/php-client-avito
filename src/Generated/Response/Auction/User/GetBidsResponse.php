<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Auction\User;

use php_client_avito\Generated\Response\GetUserBidsResponse as BaseGetUserBidsResponse;

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
