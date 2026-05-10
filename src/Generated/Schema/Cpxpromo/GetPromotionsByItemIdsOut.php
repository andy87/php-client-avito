<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/getPromotionsByItemIdsOut.
 */
class GetPromotionsByItemIdsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Schema field items */
    public array $items;
}
