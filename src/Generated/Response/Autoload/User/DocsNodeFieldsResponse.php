<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoload\User;

use php_client_avito\Generated\Response\UserDocsNodeFieldsResponse as BaseUserDocsNodeFieldsResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/node/{node_slug}/fields.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsNodeFields
 *
 * @property \php_client_avito\Generated\Schema\Autoload\APFieldsNodeAlert|null $alert Response field alert
 * @property array<int, \php_client_avito\Generated\Schema\Autoload\APIField> $fields Массив полей категории
 * @property \php_client_avito\Generated\Schema\Autoload\APIFieldsNode $node Response field node
 */
class DocsNodeFieldsResponse extends BaseUserDocsNodeFieldsResponse
{
}
