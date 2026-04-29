<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Breadcrumb.
 */
class Breadcrumb extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name'];

    protected const REQUIRED_FIELDS = ['name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field name */
    public string $name;
}
