<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ResumeContacts.
 */
class ResumeContacts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['already_bought' => 'already_bought', 'contacts' => 'contacts', 'full_name' => 'full_name', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['full_name'];

    protected const CASTS = ['contacts' => [\php_client_avito\Generated\Schema\Job\ResumeContact::class]];

    /** @var bool|null Schema field already_bought */
    public ?bool $already_bought = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Job\ResumeContact>|null Schema field contacts */
    public ?array $contacts = null;

    /** @var array<string, mixed>|null Детали ФИО */
    public ?array $full_name = null;

    /** @var string|null Schema field name */
    public ?string $name = null;
}
