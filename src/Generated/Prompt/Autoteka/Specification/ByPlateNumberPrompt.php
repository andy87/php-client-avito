<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoteka\Specification;

use php_client_avito\Generated\Prompt\SpecificationByPlateNumberPrompt as BaseSpecificationByPlateNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/specifications/by-plate-number.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationByPlateNumber
 *
 * @property string $plateNumber Регистрационный номер запрашиваемого авто.
 */
class ByPlateNumberPrompt extends BaseSpecificationByPlateNumberPrompt
{
}
