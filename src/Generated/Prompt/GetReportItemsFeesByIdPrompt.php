<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/{report_id}/items/fees.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsFeesById
 */
class GetReportItemsFeesByIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/reports/{report_id}/items/fees';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const QUERY_PARAMETER_STYLES = ['per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'ad_ids' => ['style' => 'form', 'explode' => true], 'avito_ids' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['report_id' => 'report_id', 'per_page' => 'per_page', 'page' => 'page', 'ad_ids' => 'ad_ids', 'avito_ids' => 'avito_ids'];

    protected const REQUIRED_FIELDS = ['report_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['report_id'];

    protected const QUERY_FIELDS = ['per_page', 'page', 'ad_ids', 'avito_ids'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;

    /** @var int|null Количество объявлений на странице: целое число больше 0 и меньше или равно 200
 */
    public ?int $per_page = null;

    /** @var int|null Номер страницы: целое число больше или равно 0
 */
    public ?int $page = null;

    /** @var string|null Фильтр по ID объявления.
Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id),
перечисленными через «,» или «|».
 */
    public ?string $ad_ids = null;

    /** @var string|null Фильтр по AvitoID объявления.
Формат значения: строка с идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 */
    public ?string $avito_ids = null;
}
