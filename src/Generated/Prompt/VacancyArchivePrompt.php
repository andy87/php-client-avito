<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v1/vacancies/archived/{vacancy_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyArchive
 */
class VacancyArchivePrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/job/v1/vacancies/archived/{vacancy_id}';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['vacancy_id' => 'vacancy_id', 'X_Is_Employee' => 'X-Is-Employee', 'employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['vacancy_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['employee_id'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор вакансии на сайте */
    public int $vacancy_id;

    /** @var bool|null Сотрудник компании может остановить публикацию только для своих вакансий */
    public ?bool $X_Is_Employee = null;

    /** @var int|null employee_id - Идентификатор сотрудника на Авито.
Сотрудник может останавливать только закрепленные за ним вакансии в Avito Pro.
Сотрудник должен быть в активен.
 */
    public ?int $employee_id = null;
}
