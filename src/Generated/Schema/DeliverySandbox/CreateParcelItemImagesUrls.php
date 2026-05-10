<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItemImagesUrls.
 */
class CreateParcelItemImagesUrls extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['listValue' => 'list', 'listing' => 'listing'];

    protected const REQUIRED_FIELDS = ['listing', 'listValue'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string> Список URL-ов фотографий.
 */
    public array $listValue;

    /** @var string URL основной фотографии.
 */
    public string $listing;
}
