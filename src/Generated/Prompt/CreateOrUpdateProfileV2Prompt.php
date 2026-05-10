<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['agreement' => 'agreement', 'autoload_enabled' => 'autoload_enabled', 'feeds_data' => 'feeds_data', 'report_email' => 'report_email', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['autoload_enabled', 'feeds_data', 'report_email', 'schedule'];

    protected const NULLABLE_FIELDS = ['agreement'];

    protected const CASTS = ['feeds_data' => \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData::class, 'schedule' => \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['agreement', 'autoload_enabled', 'feeds_data', 'report_email', 'schedule'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Согласие с [правилами](https://support.avito.ru/articles/203867776) использования Авито Автозагрузки.

Обязательно, если профиль еще не существует.
 */
    public ?bool $agreement = null;

    /** @var bool Статус автозагрузки (вкл/выкл) */
    public bool $autoload_enabled;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData Body field feeds_data */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\FeedsData $feeds_data;

    /** @var string Почта, на которую будут приходить отчеты о выгрузках */
    public string $report_email;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule Body field schedule */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\ExportSchedule $schedule;
}
