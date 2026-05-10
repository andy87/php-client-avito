<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/tree.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsTree
 */
class UserDocsTreeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\and_y87\php_client_avito\Generated\Schema\Autoload\APICategoryNode::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoload\APICategoryTreeOut::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\APICategoryNode> Response field categories */
    public array $categories;
}
