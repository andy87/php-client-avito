<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API resumeGetContacts.
 */
class ResumeGetContactsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['already_bought' => 'already_bought', 'contacts' => 'contacts', 'full_name' => 'full_name', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['full_name'];

    protected const CASTS = ['contacts' => [\Andy87\ClientsAvito\Generated\Schema\Job\ResumeContact::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\ResumeContacts::class;

    /** @var bool|null Response field already_bought */
    public ?bool $already_bought = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\ResumeContact>|null Response field contacts */
    public ?array $contacts = null;

    /** @var array<string, mixed>|null Детали ФИО */
    public ?array $full_name = null;

    /** @var string|null Response field name */
    public ?string $name = null;
}
