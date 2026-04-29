<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/EnrichedProperties.
 */
class EnrichedProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['age' => 'age', 'citizenship' => 'citizenship', 'experience' => 'experience', 'full_name' => 'full_name', 'gender' => 'gender', 'phone' => 'phone', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['age', 'citizenship', 'experience', 'full_name', 'gender', 'phone'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Возраст. Пусто, если соискатель не оставил эти данные. */
    public ?array $age = null;

    /** @var array<string, mixed>|null Гражданство. Пусто, если соискатель не оставил эти данные. */
    public ?array $citizenship = null;

    /** @var array<string, mixed>|null Опыт по профессии. Пусто, если соискатель не оставил эти данные. */
    public ?array $experience = null;

    /** @var array<string, mixed>|null ФИО. Пусто, если соискатель не оставил эти данные. */
    public ?array $full_name = null;

    /** @var array<string, mixed>|null Пол. Пусто, если соискатель не оставил эти данные. */
    public ?array $gender = null;

    /** @var array<string, mixed>|null Номер телефона. Пусто, если соискатель не оставил эти данные. */
    public ?array $phone = null;

    /** @var string|null Текущий статус сбора информации о кандидате. Возможные значения:<br/>
 - `"in_progress"` - собираются данные о кандидате<br/>
 - `"not_completed"` - данные о кандидате не собраны<br/>
 - `"completed_no_criteria"` - нет оценки под критерии вакансии<br/>
 - `"completed_matched"` - кандидат подошел под критерии вакансии<br/>
 - `"completed_mismatched"` - кандидат не подошел под критерии вакансии */
    public ?string $status = null;
}
