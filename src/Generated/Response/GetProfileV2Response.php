<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getProfileV2.
 */
class GetProfileV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['autoload_enabled' => 'autoload_enabled', 'feeds_data' => 'feeds_data', 'report_email' => 'report_email', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['feeds_data', 'autoload_enabled', 'report_email', 'schedule'];

    protected const NULLABLE_FIELDS = ['report_email'];

    protected const CASTS = ['feeds_data' => \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData::class, 'schedule' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const MODEL = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData Response field feeds_data */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData $feeds_data;

    /** @var string|null Почта, на которую будут приходить отчеты о выгрузках */
    public ?string $report_email;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule Response field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule;
}
