<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\SbcGateway\Open;

use Andy87\ClientsAvito\Generated\Prompt\OpenApiAvailablePrompt as BaseOpenApiAvailablePrompt;

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
