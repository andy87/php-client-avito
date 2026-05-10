<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/node/{node_slug}/fields.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsNodeFields
 */
class UserDocsNodeFieldsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['alert' => 'alert', 'fields' => 'fields', 'node' => 'node'];

    protected const REQUIRED_FIELDS = ['node', 'fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['alert' => \php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\php_client_avito\Generated\Schema\Autoload\APIField::class], 'node' => \php_client_avito\Generated\Schema\Autoload\APIFieldsNode::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoload\APIFieldsOut::class;

    /** @var \php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert|null Response field alert */
    public ?\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \php_client_avito\Generated\Schema\Autoload\APIFieldsNode Response field node */
    public \php_client_avito\Generated\Schema\Autoload\APIFieldsNode $node;
}
