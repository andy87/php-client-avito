<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoload\OrValue;

use php_client_avito\Generated\Prompt\CreateOrUpdateProfileV2Prompt as BaseCreateOrUpdateProfileV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /autoload/v2/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfileV2
 *
 * @property bool|null $agreement Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки. Обязательно, если профиль еще не существует.
 * @property bool $autoload_enabled Статус автозагрузки (вкл/выкл)
 * @property \php_client_avito\Generated\Schema\Autoload\FeedsData $feeds_data Body field feeds_data
 * @property string $report_email Почта, на которую будут приходить отчеты о выгрузках
 * @property \php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule Body field schedule
 */
class CreateUpdateProfileV2Prompt extends BaseCreateOrUpdateProfileV2Prompt
{
}
