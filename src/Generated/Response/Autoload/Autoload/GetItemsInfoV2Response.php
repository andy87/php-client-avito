<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Autoload;

use Andy87\ClientsAvito\Generated\Response\GetAutoloadItemsInfoV2Response as BaseGetAutoloadItemsInfoV2Response;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAutoloadItemsInfoV2
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoAutoloadV2> $items Список объявлений
 */
class GetItemsInfoV2Response extends BaseGetAutoloadItemsInfoV2Response
{
}
