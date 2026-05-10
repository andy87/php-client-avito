<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoteka\Valuation;

use php_client_avito\Generated\Prompt\ValuationBySpecificationPrompt as BaseValuationBySpecificationPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/valuation/by-specification.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/valuationBySpecification
 *
 * @property array<string, mixed>|null $location Body field location
 * @property int|null $mileage Пробег в км
 * @property array<string, mixed> $specification Body field specification
 * @property string|null $vehicleId Идентификатор авто (vin/frame).
 */
class BySpecificationPrompt extends BaseValuationBySpecificationPrompt
{
}
