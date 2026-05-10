<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoload\Profile;

use and_y87\php_client_avito\Generated\Response\GetProfileV2Response as BaseGetProfileV2Response;

/**
 * Ответ Avito API [GET] /autoload/v2/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfileV2
 *
 * @property bool $autoload_enabled Статус автозагрузки (вкл/выкл)
 * @property \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData $feeds_data Response field feeds_data
 * @property string|null $report_email Почта, на которую будут приходить отчеты о выгрузках
 * @property \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule Response field schedule
 */
class GetV2Response extends BaseGetProfileV2Response
{
}
