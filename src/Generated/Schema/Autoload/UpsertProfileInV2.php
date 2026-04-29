<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/UpsertProfileInV2.
 */
class UpsertProfileInV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['agreement' => 'agreement', 'autoload_enabled' => 'autoload_enabled', 'feeds_data' => 'feeds_data', 'report_email' => 'report_email', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['feeds_data', 'schedule', 'autoload_enabled', 'report_email'];

    protected const NULLABLE_FIELDS = ['agreement'];

    protected const CASTS = ['feeds_data' => \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData::class, 'schedule' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule::class];

    /** @var bool|null Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки.

Обязательно, если профиль еще не существует.
 */
    public ?bool $agreement = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData Schema field feeds_data */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData $feeds_data;

    /** @var string Почта, на которую будут приходить отчеты о выгрузках */
    public string $report_email;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule Schema field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule;
}
