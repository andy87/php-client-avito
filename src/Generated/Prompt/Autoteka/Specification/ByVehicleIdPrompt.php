<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Specification;

use Andy87\ClientsAvito\Generated\Prompt\SpecificationByVehicleIdPrompt as BaseSpecificationByVehicleIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/specifications/by-vehicle-id.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationByVehicleId
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vehicleId Идентификатор запрашиваемого авто (vin/frame).
 */
class ByVehicleIdPrompt extends BaseSpecificationByVehicleIdPrompt
{
}
