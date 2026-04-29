<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\SbcGateway\Open;

use Andy87\ClientsAvito\Generated\Prompt\OpenApiMultiConfirmPrompt as BaseOpenApiMultiConfirmPrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/multiConfirm.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiMultiConfirm
 * 
 * @property array<int, array<string, mixed>>|null $dispatches Body field dispatches
 * @property int|null $expiresAt Дата окончания предложения
 */
class ApiMultiConfirmPrompt extends BaseOpenApiMultiConfirmPrompt
{
}
