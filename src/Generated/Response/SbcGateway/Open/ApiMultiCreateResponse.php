<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\SbcGateway\Open;

use Andy87\ClientsAvito\Generated\Response\OpenApiMultiCreateResponse as BaseOpenApiMultiCreateResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/multiCreate.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiCreate
 * 
 * @property array<string, mixed> $common Общие данные для всех объявлений
 * @property array<int, array<string, mixed>> $dispatches Список созданных рассылок
 */
class ApiMultiCreateResponse extends BaseOpenApiMultiCreateResponse
{
}
