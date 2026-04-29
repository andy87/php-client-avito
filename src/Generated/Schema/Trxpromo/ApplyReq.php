<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Trxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito trxpromo/ApplyReq.
 */
class ApplyReq extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Schema field items */
    public array $items;
}
