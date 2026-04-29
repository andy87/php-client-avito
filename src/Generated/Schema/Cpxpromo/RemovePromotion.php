<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
