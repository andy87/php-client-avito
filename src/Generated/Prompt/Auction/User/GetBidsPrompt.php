<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Auction\User;

use php_client_avito\Generated\Prompt\GetUserBidsPrompt as BaseGetUserBidsPrompt;

/**
 * Класс данных запроса Avito API [GET] /auction/1/bids.
 *
 * @documentation https://developers.avito.ru/api-catalog/auction/documentation#operation/getUserBids
 *
 * @property int|null $fromItemID Идентификатор последнего объявления в предыдущей пачке (по умолчанию 0)
 * @property int|null $batchSize Кол-во объявлений в пачке (максимум 200)
 */
class GetBidsPrompt extends BaseGetUserBidsPrompt
{
}
