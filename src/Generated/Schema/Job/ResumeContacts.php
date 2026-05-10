<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ResumeContacts.
 */
class ResumeContacts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['already_bought' => 'already_bought', 'contacts' => 'contacts', 'full_name' => 'full_name', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['full_name'];

    protected const CASTS = ['contacts' => [\and_y87\php_client_avito\Generated\Schema\Job\ResumeContact::class]];

    /** @var bool|null Schema field already_bought */
    public ?bool $already_bought = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Job\ResumeContact>|null Schema field contacts */
    public ?array $contacts = null;

    /** @var array<string, mixed>|null Детали ФИО */
    public ?array $full_name = null;

    /** @var string|null Schema field name */
    public ?string $name = null;
}
