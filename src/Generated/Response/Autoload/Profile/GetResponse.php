<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoload\Profile;

use and_y87\php_client_avito\Generated\Response\GetProfileResponse as BaseGetProfileResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfile
 *
 * @property bool $autoload_enabled Статус автозагрузки (вкл/выкл)
 * @property string|null $report_email Почта, на которую будут приходить отчеты о выгрузках
 * @property \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule Response field schedule
 * @property string|null $upload_url URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https.
 */
class GetResponse extends BaseGetProfileResponse
{
}
