<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportsV2
 */
class GetReportsV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/reports';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['per_page' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'date_from' => ['style' => 'form', 'explode' => true], 'date_to' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['per_page' => 'per_page', 'page' => 'page', 'date_from' => 'date_from', 'date_to' => 'date_to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['per_page', 'page', 'date_from', 'date_to'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int|null Количество отчётов на странице: целое число больше 0 и меньше или равно 200.
 */
    public ?int $per_page = null;

    /** @var int|null Номер страницы: целое число больше или равно 0.
 */
    public ?int $page = null;

    /** @var string|null Фильтр по дате создания отчёта «от» (от такой-то даты).
Формат значения: RFC3339
 */
    public ?string $date_from = null;

    /** @var string|null Фильтр по дате создания отчёта «до» (до такой-то даты).
Формат значения: RFC3339
 */
    public ?string $date_to = null;
}
