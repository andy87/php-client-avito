<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v1/profile.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfile
 */
class GetProfileResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['autoload_enabled' => 'autoload_enabled', 'report_email' => 'report_email', 'schedule' => 'schedule', 'upload_url' => 'upload_url'];

    protected const REQUIRED_FIELDS = ['upload_url', 'autoload_enabled', 'report_email', 'schedule'];

    protected const NULLABLE_FIELDS = ['report_email', 'upload_url'];

    protected const CASTS = ['schedule' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const MODEL = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var string|null Почта, на которую будут приходить отчеты о выгрузках */
    public ?string $report_email;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule Response field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule;

    /** @var string|null URL-адрес фида, для которого настроены регулярные выгрузки. Должен начинаться с http или https. */
    public ?string $upload_url;
}
