<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyArchive.
 */
class VacancyArchive extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employee_id' => 'employee_id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null employee_id - Идентификатор сотрудника на Авито.
Сотрудник может останавливать только закрепленные за ним вакансии в Avito Pro.
Сотрудник должен быть в активен.
 */
    public ?int $employee_id = null;
}
