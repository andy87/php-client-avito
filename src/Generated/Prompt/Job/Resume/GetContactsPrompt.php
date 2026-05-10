<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Job\Resume;

use and_y87\php_client_avito\Generated\Prompt\ResumeGetContactsPrompt as BaseResumeGetContactsPrompt;

/**
 * Класс данных запроса Avito API [GET] /job/v1/resumes/{resume_id}/contacts/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetContacts
 *
 * @property bool|null $X_Is_Employee Сотрудник компании может получить информацию о резюме приобретенных компанией
 * @property int $resume_id Идентификатор резюме
 * @property int|null $employee_id Идентификатор сотрудника компании в рамках иерархии аккаунтов. Используется для возможности списать контакт с лимита на покупку резюме для указанного сотрудника.
 */
class GetContactsPrompt extends BaseResumeGetContactsPrompt
{
}
