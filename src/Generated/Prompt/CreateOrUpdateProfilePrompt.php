<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoload/v1/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfile
 */
class CreateOrUpdateProfilePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoload/v1/profile';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['agreement' => 'agreement', 'autoload_enabled' => 'autoload_enabled', 'report_email' => 'report_email', 'schedule' => 'schedule', 'upload_url' => 'upload_url'];

    protected const REQUIRED_FIELDS = ['autoload_enabled', 'report_email', 'schedule', 'upload_url'];

    protected const NULLABLE_FIELDS = ['agreement'];

    protected const CASTS = ['schedule' => \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['agreement', 'autoload_enabled', 'report_email', 'schedule', 'upload_url'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки.

Обязательно, если профиль еще не существует.
 */
    public ?bool $agreement = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var string Почта, на которую будут приходить отчеты о выгрузках */
    public string $report_email;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule Body field schedule */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule;

    /** @var string URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https. */
    public string $upload_url;
}
