<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Profile;

use Andy87\ClientsAvito\Generated\Response\GetProfileResponse as BaseGetProfileResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/profile.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfile
 * 
 * @property bool $autoload_enabled Статус автозагрузки (вкл/выкл)
 * @property string|null $report_email Почта, на которую будут приходить отчеты о выгрузках
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule Response field schedule
 * @property string|null $upload_url URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https.
 */
class GetResponse extends BaseGetProfileResponse
{
}
