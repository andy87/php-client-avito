<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsTerminal.
 */
class ChangeParcelsTerminal extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Внешний идентификатор ПВЗ.
 */
    public string $id;
}
