<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\SbcGateway\Open;

use php_client_avito\Generated\Prompt\OpenApiAvailablePrompt as BaseOpenApiAvailablePrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/available.
 *
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiAvailable
 *
 * @property array<int, int> $itemIds список id объявлений
 */
class ApiAvailablePrompt extends BaseOpenApiAvailablePrompt
{
}
