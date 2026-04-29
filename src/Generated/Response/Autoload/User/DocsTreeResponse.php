<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\User;

use Andy87\ClientsAvito\Generated\Response\UserDocsTreeResponse as BaseUserDocsTreeResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/tree.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsTree
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APICategoryNode> $categories Response field categories
 */
class DocsTreeResponse extends BaseUserDocsTreeResponse
{
}
