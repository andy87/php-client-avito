<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoload\User;

use php_client_avito\Generated\Response\UserDocsTreeResponse as BaseUserDocsTreeResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/tree.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsTree
 *
 * @property array<int, \php_client_avito\Generated\Schema\Autoload\APICategoryNode> $categories Response field categories
 */
class DocsTreeResponse extends BaseUserDocsTreeResponse
{
}
