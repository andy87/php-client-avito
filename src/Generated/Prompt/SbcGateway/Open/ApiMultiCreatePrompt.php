<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\SbcGateway\Open;

use php_client_avito\Generated\Prompt\OpenApiMultiCreatePrompt as BaseOpenApiMultiCreatePrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/multiCreate.
 *
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiCreate
 *
 * @property array<int, int> $itemIds Список id выбранных для рассылки объявлений
 */
class ApiMultiCreatePrompt extends BaseOpenApiMultiCreatePrompt
{
}
