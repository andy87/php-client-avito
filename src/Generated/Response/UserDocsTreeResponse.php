<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

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

    protected const CASTS = ['categories' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APICategoryNode::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoload\APICategoryTreeOut::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APICategoryNode> Response field categories */
    public array $categories;
}
