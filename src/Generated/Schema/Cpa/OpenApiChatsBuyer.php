<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatsBuyer.
 */
class OpenApiChatsBuyer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyerId' => 'buyerId', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['buyerId', 'name', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int ID баера */
    public int $buyerId;

    /** @var string Имя баера */
    public string $name;

    /** @var string URL до картинки с превью */
    public string $url;
}
