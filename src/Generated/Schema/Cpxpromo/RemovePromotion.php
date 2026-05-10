<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpxpromo;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/RemovePromotion.
 */
class RemovePromotion extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemID' => 'itemID'];

    protected const REQUIRED_FIELDS = ['itemID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор объявления */
    public int $itemID;
}
