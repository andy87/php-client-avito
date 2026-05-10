<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
