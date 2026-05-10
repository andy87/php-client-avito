<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIFieldsOut.
 */
class APIFieldsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alert' => 'alert', 'fields' => 'fields', 'node' => 'node'];

    protected const REQUIRED_FIELDS = ['node', 'fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['alert' => \php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\php_client_avito\Generated\Schema\Autoload\APIField::class], 'node' => \php_client_avito\Generated\Schema\Autoload\APIFieldsNode::class];

    /** @var \php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert|null Schema field alert */
    public ?\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \php_client_avito\Generated\Schema\Autoload\APIFieldsNode Schema field node */
    public \php_client_avito\Generated\Schema\Autoload\APIFieldsNode $node;
}
