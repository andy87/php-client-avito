<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v2/vacancies/{vacancy_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetItem
 */
class VacancyGetItemPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v2/vacancies/{vacancy_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['fields' => ['style' => 'form', 'explode' => true], 'params' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'vacancy_id' => 'vacancy_id', 'fields' => 'fields', 'params' => 'params'];

    protected const REQUIRED_FIELDS = ['vacancy_id'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['vacancy_id'];

    protected const QUERY_FIELDS = ['fields', 'params'];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник компании получает информацию по вакансии, которую он опубликовал для компании */
    public ?bool $X_Is_Employee = null;

    /** @var int Идентификатор вакансии */
    public int $vacancy_id;

    /** @var string|null Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля. */
    public ?string $fields = null;

    /** @var string|null Дополнительные поля, которые входят в params (можно указать несколько
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
    public ?string $params = null;
}
