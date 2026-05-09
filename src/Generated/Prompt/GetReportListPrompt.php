<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoteka/v1/reports/list/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReportList
 */
class GetReportListPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoteka/v1/reports/list/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['lastReportId' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true], 'vin' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['lastReportId' => 'lastReportId', 'limit' => 'limit', 'vin' => 'vin'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['lastReportId', 'limit', 'vin'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['lastReportId', 'limit', 'vin'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Идентификатор отчета для получения данных постранично. */
    public ?int $lastReportId = null;

    /** @var int|null Количество отчетов в результате */
    public ?int $limit = null;

    /** @var string|null Фильтр по VIN или номеру кузова */
    public ?string $vin = null;
}
