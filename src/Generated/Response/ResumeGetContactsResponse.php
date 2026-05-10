<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v1/resumes/{resume_id}/contacts/.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/resumeGetContacts
 */
class ResumeGetContactsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['already_bought' => 'already_bought', 'contacts' => 'contacts', 'full_name' => 'full_name', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['full_name'];

    protected const CASTS = ['contacts' => [\and_y87\php_client_avito\Generated\Schema\Job\ResumeContact::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\ResumeContacts::class;

    /** @var bool|null Response field already_bought */
    public ?bool $already_bought = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Job\ResumeContact>|null Response field contacts */
    public ?array $contacts = null;

    /** @var array<string, mixed>|null Детали ФИО */
    public ?array $full_name = null;

    /** @var string|null Response field name */
    public ?string $name = null;
}
