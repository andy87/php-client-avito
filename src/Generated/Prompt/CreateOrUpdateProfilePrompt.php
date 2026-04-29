<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API createOrUpdateProfile.
 */
class CreateOrUpdateProfilePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoload/v1/profile';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['agreement' => 'agreement', 'autoload_enabled' => 'autoload_enabled', 'report_email' => 'report_email', 'schedule' => 'schedule', 'upload_url' => 'upload_url'];

    protected const REQUIRED_FIELDS = ['autoload_enabled', 'report_email', 'schedule', 'upload_url'];

    protected const NULLABLE_FIELDS = ['agreement'];

    protected const CASTS = ['schedule' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['agreement', 'autoload_enabled', 'report_email', 'schedule', 'upload_url'];

    /** @var bool|null Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки.

Обязательно, если профиль еще не существует.
 */
    public ?bool $agreement = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var string Почта, на которую будут приходить отчеты о выгрузках */
    public string $report_email;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule Body field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule;

    /** @var string URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https. */
    public string $upload_url;
}
