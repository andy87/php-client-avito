<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoload;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIFieldsOut.
 */
class APIFieldsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alert' => 'alert', 'fields' => 'fields', 'node' => 'node'];

    protected const REQUIRED_FIELDS = ['node', 'fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['alert' => \and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\and_y87\php_client_avito\Generated\Schema\Autoload\APIField::class], 'node' => \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert|null Schema field alert */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode Schema field node */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode $node;
}
