<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\User;

use Andy87\ClientsAvito\Generated\Response\UserDocsNodeFieldsResponse as BaseUserDocsNodeFieldsResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/user-docs/node/{node_slug}/fields.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/userDocsNodeFields
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoload\APFieldsNodeAlert|null $alert Response field alert
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIField> $fields Массив полей категории
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldsNode $node Response field node
 */
class DocsNodeFieldsResponse extends BaseUserDocsNodeFieldsResponse
{
}
