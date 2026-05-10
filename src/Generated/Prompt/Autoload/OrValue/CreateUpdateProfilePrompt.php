<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoload\OrValue;

use php_client_avito\Generated\Prompt\CreateOrUpdateProfilePrompt as BaseCreateOrUpdateProfilePrompt;

/**
 * Класс данных запроса Avito API [POST] /autoload/v1/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfile
 *
 * @property bool|null $agreement Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки. Обязательно, если профиль еще не существует.
 * @property bool $autoload_enabled Статус автозагрузки (вкл/выкл)
 * @property string $report_email Почта, на которую будут приходить отчеты о выгрузках
 * @property \php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule Body field schedule
 * @property string $upload_url URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https.
 */
class CreateUpdateProfilePrompt extends BaseCreateOrUpdateProfilePrompt
{
}
