<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatsItem.
 */
class OpenApiChatsItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'pricePenny' => 'pricePenny', 'title' => 'title', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['itemId', 'title', 'pricePenny', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int ID объявления */
    public int $itemId;

    /** @var int Цена объявления в копейках */
    public int $pricePenny;

    /** @var string Название объявления */
    public string $title;

    /** @var string URL до картинки с превью */
    public string $url;
}
