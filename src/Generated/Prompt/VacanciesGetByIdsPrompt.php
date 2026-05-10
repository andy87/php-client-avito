<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/batch.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacanciesGetByIds
 */
class VacanciesGetByIdsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v2/vacancies/batch';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'fields' => 'fields', 'ids' => 'ids', 'params' => 'params'];

    protected const REQUIRED_FIELDS = ['ids'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['fields', 'ids', 'params'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник компании получает информацию по вакансиям, которую он опубликовал для компании */
    public ?bool $X_Is_Employee = null;

    /** @var array<int, string>|null Поля для основного тела ответа */
    public ?array $fields = null;

    /** @var array<int, int> Идентификаторы вакансий на сайте */
    public array $ids;

    /** @var array<int, string>|null Дополнительные поля, которые входят в params (можно указать несколько
значений через запятую). Если значение не задано - возвращаются все поля.

Устаревшие значения:
* change (используйте shifts)
* is_remote (используйте work_format)

Удалённые значения (более недоступны):
* manufacturing_type
* industry_type
* piecework_flag
* programs
* warehouse_functionality
* where_to_work
 */
    public ?array $params = null;
}
