<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Specification;

use Andy87\ClientsAvito\Generated\Prompt\SpecificationByPlateNumberPrompt as BaseSpecificationByPlateNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/specifications/by-plate-number.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationByPlateNumber
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $plateNumber Регистрационный номер запрашиваемого авто.
 */
class ByPlateNumberPrompt extends BaseSpecificationByPlateNumberPrompt
{
}
