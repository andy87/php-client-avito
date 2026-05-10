<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Str;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/ParamPricesRealty.
 */
class ParamPricesRealty extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['prices' => 'prices'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['prices' => [\php_client_avito\Generated\Schema\Str\ParamPriceItemRealty::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Str\ParamPriceItemRealty>|null Schema field prices */
    public ?array $prices = null;
}
