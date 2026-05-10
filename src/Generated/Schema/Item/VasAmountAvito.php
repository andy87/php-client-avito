<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
