<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['alert' => \and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert::class, 'fields' => [\and_y87\php_client_avito\Generated\Schema\Autoload\APIField::class], 'node' => \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsOut::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert|null Response field alert */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert $alert = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\APIField> Массив полей категории */
    public array $fields;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode Response field node */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\APIFieldsNode $node;
}
