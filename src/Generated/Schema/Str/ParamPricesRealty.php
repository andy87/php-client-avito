<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Str;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/ParamPricesRealty.
 */
class ParamPricesRealty extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['prices' => 'prices'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['prices' => [\Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty>|null Schema field prices */
    public ?array $prices = null;
}
