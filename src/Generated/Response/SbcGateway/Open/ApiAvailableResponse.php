<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\SbcGateway\Open;

use Andy87\ClientsAvito\Generated\Response\OpenApiAvailableResponse as BaseOpenApiAvailableResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/available.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiAvailable
 * 
 * @property array<int, array<string, mixed>>|null $items Список объявлений и признаков доступности для них услуги
 */
class ApiAvailableResponse extends BaseOpenApiAvailableResponse
{
}
