<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Item\Items;

use and_y87\php_client_avito\Generated\Response\GetItemsInfoResponse as BaseGetItemsInfoResponse;

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
