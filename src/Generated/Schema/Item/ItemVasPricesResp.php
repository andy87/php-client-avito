<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/ItemVasPricesResp.
 */
class ItemVasPricesResp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'stickers' => 'stickers', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = ['vas'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['stickers' => [\Andy87\ClientsAvito\Generated\Schema\Item\StickerResp::class], 'vas' => [\Andy87\ClientsAvito\Generated\Schema\Item\VasResp::class]];

    /** @var int|null Идентификатор объявления на сайте */
    public ?int $itemId = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Item\StickerResp>|null Schema field stickers */
    public ?array $stickers = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Item\VasResp> Schema field vas */
    public array $vas;
}
