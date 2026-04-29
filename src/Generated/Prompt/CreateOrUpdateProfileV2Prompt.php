<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autoload/v2/profile.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/createOrUpdateProfileV2
 */
class CreateOrUpdateProfileV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autoload/v2/profile';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['agreement' => 'agreement', 'autoload_enabled' => 'autoload_enabled', 'feeds_data' => 'feeds_data', 'report_email' => 'report_email', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['autoload_enabled', 'feeds_data', 'report_email', 'schedule'];

    protected const NULLABLE_FIELDS = ['agreement'];

    protected const CASTS = ['feeds_data' => \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData::class, 'schedule' => \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['agreement', 'autoload_enabled', 'feeds_data', 'report_email', 'schedule'];

    /** @var bool|null Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки.

Обязательно, если профиль еще не существует.
 */
    public ?bool $agreement = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData Body field feeds_data */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\FeedsData $feeds_data;

    /** @var string Почта, на которую будут приходить отчеты о выгрузках */
    public string $report_email;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule Body field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\Autoload\ExportSchedule $schedule;
}
