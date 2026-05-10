<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/AvitoAuctions.
 */
class AvitoAuctions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auctions' => 'auctions'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Авито-аукционы */
    public ?array $auctions = null;
}
