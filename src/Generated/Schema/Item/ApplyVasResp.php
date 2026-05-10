<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/ApplyVasResp.
 */
class ApplyVasResp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['operationId' => 'operationId'];

    protected const REQUIRED_FIELDS = ['operationId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Schema field operationId */
    public int $operationId;
}
