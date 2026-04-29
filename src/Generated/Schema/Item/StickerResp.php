<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/StickerResp.
 */
class StickerResp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'id' => 'id', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание значка */
    public string $description;

    /** @var int Идентификатор значка */
    public int $id;

    /** @var string Название значка */
    public string $title;
}
