<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/ItemVasPricesResp.
 */
class ItemVasPricesResp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'stickers' => 'stickers', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = ['vas'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['stickers' => [\and_y87\php_client_avito\Generated\Schema\Item\StickerResp::class], 'vas' => [\and_y87\php_client_avito\Generated\Schema\Item\VasResp::class]];

    /** @var int|null Идентификатор объявления на сайте */
    public ?int $itemId = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Item\StickerResp>|null Schema field stickers */
    public ?array $stickers = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Item\VasResp> Schema field vas */
    public array $vas;
}
