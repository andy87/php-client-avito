<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/statuses.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses
 */
class VacancyGetStatusesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v2/vacancies/statuses';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'ids' => 'ids'];

    protected const REQUIRED_FIELDS = ['ids'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['ids'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник компании получает информацию о статусе публикации вакансии, которую он опубликовал для компании */
    public ?bool $X_Is_Employee = null;

    /** @var array<int, string> Body field ids */
    public array $ids;
}
