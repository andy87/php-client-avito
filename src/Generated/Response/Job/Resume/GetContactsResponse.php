<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Resume;

use Andy87\ClientsAvito\Generated\Response\ResumeGetContactsResponse as BaseResumeGetContactsResponse;

/**
 * Ответ Avito API [GET] /job/v1/resumes/{resume_id}/contacts/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetContacts
 * 
 * @property bool|null $already_bought Response field already_bought
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Job\ResumeContact>|null $contacts Response field contacts
 * @property array<string, mixed>|null $full_name Детали ФИО
 * @property string|null $name Response field name
 */
class GetContactsResponse extends BaseResumeGetContactsResponse
{
}
