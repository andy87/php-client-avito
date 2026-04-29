<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Scoring;

use Andy87\ClientsAvito\Generated\Prompt\ScoringByVehicleIdPrompt as BaseScoringByVehicleIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/scoring/by-vehicle-id.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringByVehicleId
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vehicleId Идентификатор запрашиваемого авто (vin/frame).
 */
class ByVehicleIdPrompt extends BaseScoringByVehicleIdPrompt
{
}
