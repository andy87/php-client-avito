<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ImageUrls.
 */
class ImageUrls extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['listValue' => 'list', 'listing' => 'listing'];

    protected const REQUIRED_FIELDS = ['listValue', 'listing'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string> Список URL фотографий айтема */
    public array $listValue;

    /** @var string URL основной фотографии айтема */
    public string $listing;
}
