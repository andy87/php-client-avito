<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Valuation;

use Andy87\ClientsAvito\Generated\Prompt\ValuationBySpecificationPrompt as BaseValuationBySpecificationPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/valuation/by-specification.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/valuationBySpecification
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property array<string, mixed>|null $location Body field location
 * @property int|null $mileage Пробег в км
 * @property array<string, mixed> $specification Body field specification
 * @property string|null $vehicleId Идентификатор авто (vin/frame).
 */
class BySpecificationPrompt extends BaseValuationBySpecificationPrompt
{
}
