<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItemBreadcrumb.
 */
class CreateParcelItemBreadcrumb extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name'];

    protected const REQUIRED_FIELDS = ['name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Название категории */
    public string $name;
}
