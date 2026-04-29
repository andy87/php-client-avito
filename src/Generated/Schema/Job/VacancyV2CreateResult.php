<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyV2CreateResult.
 */
class VacancyV2CreateResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Идентификатор добавленной вакансии в формате UUID (в случае дубликата UUID не меняется).
Используется для запросов в ручки:
- [Получение статуса публикации вакансии V2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses)
- [Редактирование вакансии V2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyUpdateV2)
 */
    public ?string $id = null;
}
