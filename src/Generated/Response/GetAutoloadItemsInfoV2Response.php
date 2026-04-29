<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAutoloadItemsInfoV2
 */
class GetAutoloadItemsInfoV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoAutoloadV2::class]];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoAutoloadV2> Список объявлений */
    public array $items;
}
