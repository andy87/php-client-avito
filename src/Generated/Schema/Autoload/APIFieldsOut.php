<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIFieldsOut.
 */
class APIFieldsOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alert' => 'alert', 'fields' => 'fields', 'node' => 'node'];

    protected const REQUIRED_FIELDS = ['node', 'fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['alert' => \Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APIField::class], 'node' => \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert|null Schema field alert */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode Schema field node */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode $node;
}
