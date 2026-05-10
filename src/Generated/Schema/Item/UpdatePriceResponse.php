<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/UpdatePriceResponse.
 */
class UpdatePriceResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field result */
    public array $result;
}
