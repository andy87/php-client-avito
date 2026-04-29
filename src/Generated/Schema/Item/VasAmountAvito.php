<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/VasAmountAvito.
 */
class VasAmountAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Сумма списания за применение услуги или пакета */
    public ?float $amount = null;
}
