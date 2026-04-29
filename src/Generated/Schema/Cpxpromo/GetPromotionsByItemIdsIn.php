<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/getPromotionsByItemIdsIn.
 */
class GetPromotionsByItemIdsIn extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemIDs' => 'itemIDs'];

    protected const REQUIRED_FIELDS = ['itemIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, int> Schema field itemIDs */
    public array $itemIDs;
}
