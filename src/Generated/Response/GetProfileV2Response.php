<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/profile.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getProfileV2
 */
class GetProfileV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['autoload_enabled' => 'autoload_enabled', 'feeds_data' => 'feeds_data', 'report_email' => 'report_email', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['feeds_data', 'autoload_enabled', 'report_email', 'schedule'];

    protected const NULLABLE_FIELDS = ['report_email'];

    protected const CASTS = ['feeds_data' => \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData::class, 'schedule' => \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const MODEL = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData Response field feeds_data */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData $feeds_data;

    /** @var string|null Почта, на которую будут приходить отчеты о выгрузках */
    public ?string $report_email;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule Response field schedule */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule;
}
