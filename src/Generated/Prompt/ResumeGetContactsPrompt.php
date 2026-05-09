<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/resumes/{resume_id}/contacts/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetContacts
 */
class ResumeGetContactsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/job/v1/resumes/{resume_id}/contacts/';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['employee_id' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'resume_id' => 'resume_id', 'employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = ['resume_id'];

    protected const NULLABLE_FIELDS = ['X_Is_Employee', 'employee_id'];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['resume_id'];

    protected const QUERY_FIELDS = ['employee_id'];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Сотрудник компании может получить информацию о резюме приобретенных компанией */
    public ?bool $X_Is_Employee = null;

    /** @var int Идентификатор резюме */
    public int $resume_id;

    /** @var int|null Идентификатор сотрудника компании в рамках иерархии аккаунтов. Используется для возможности списать контакт с лимита на покупку резюме для указанного сотрудника.
 */
    public ?int $employee_id = null;
}
