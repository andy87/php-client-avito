<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\SbcGateway\Open;

use Andy87\ClientsAvito\Generated\Prompt\OpenApiMultiCreatePrompt as BaseOpenApiMultiCreatePrompt;

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
