<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Report;

use Andy87\ClientsAvito\Generated\Prompt\PostReportByVehicleIdPrompt as BasePostReportByVehicleIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoteka/v1/reports-by-vehicle-id.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/postReportByVehicleId
 * 
 * @property string|null $Authorization Токен для авторизации
 * @property string $vehicleId Идентификатор запрашиваемого авто (vin/frame).
 */
class PostByVehicleIdPrompt extends BasePostReportByVehicleIdPrompt
{
}
