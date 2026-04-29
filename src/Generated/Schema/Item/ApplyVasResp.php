<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
