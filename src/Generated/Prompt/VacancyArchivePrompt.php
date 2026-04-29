<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['employee_id'];

    /** @var int|null employee_id - Идентификатор сотрудника на Авито.
Сотрудник может останавливать только закрепленные за ним вакансии в Avito Pro.
Сотрудник должен быть в активен.
 */
    public ?int $employee_id = null;
}
