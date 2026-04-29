<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API userDocsNodeFields.
 */
class UserDocsNodeFieldsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['alert' => 'alert', 'fields' => 'fields', 'node' => 'node'];

    protected const REQUIRED_FIELDS = ['node', 'fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['alert' => \Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APIField::class], 'node' => \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsOut::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert|null Response field alert */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode Response field node */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode $node;
}
