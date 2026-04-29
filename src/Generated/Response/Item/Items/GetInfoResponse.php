<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Item\Items;

use Andy87\ClientsAvito\Generated\Response\GetItemsInfoResponse as BaseGetItemsInfoResponse;

/**
 * Ответ Avito API [GET] /core/v1/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemsInfo
 * 
 * @property array<string, mixed>|null $meta Response field meta
 * @property array<int, array<string, mixed>>|null $resources Response field resources
 */
class GetInfoResponse extends BaseGetItemsInfoResponse
{
}
