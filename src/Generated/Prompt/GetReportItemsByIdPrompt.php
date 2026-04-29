<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getReportItemsById.
 */
class GetReportItemsByIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/reports/{report_id}/items';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['report_id' => 'report_id', 'per_page' => 'per_page', 'page' => 'page', 'query' => 'query', 'sections' => 'sections'];

    protected const REQUIRED_FIELDS = ['report_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['report_id'];

    protected const QUERY_FIELDS = ['per_page', 'page', 'query', 'sections'];

    protected const BODY_FIELDS = [];

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;

    /** @var int|null Количество объявлений на странице: целое число больше 0 и меньше или равно 200
 */
    public ?int $per_page = null;

    /** @var int|null Номер страницы: целое число больше или равно 0
 */
    public ?int $page = null;

    /** @var string|null Фильтр по ID объявления.
Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id)
или идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 */
    public ?string $query = null;

    /** @var string|null Фильтр объявлений по разделам. Формат значения: строка с идентификаторами разделов, перечисленными через «,» или «|».
Получить список разделов для конкретного отчёта можно с помощью метода
[Статистика по конкретной выгрузке](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV3).
 */
    public ?string $sections = null;
}
