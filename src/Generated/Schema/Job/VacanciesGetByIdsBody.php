<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacanciesGetByIdsBody.
 */
class VacanciesGetByIdsBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fields' => 'fields', 'ids' => 'ids', 'params' => 'params'];

    protected const REQUIRED_FIELDS = ['ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null Поля для основного тела ответа */
    public ?array $fields = null;

    /** @var array<int, int> Идентификаторы вакансий на сайте */
    public array $ids;

    /** @var array<int, string>|null Дополнительные поля, которые входят в params (можно указать несколько
значений через запятую). Если значение не задано - возвращаются все поля.

Устаревшие значения:
* change (используйте shifts)
* is_remote (используйте work_format)

Удалённые значения (более недоступны):
* manufacturing_type
* industry_type
* piecework_flag
* programs
* warehouse_functionality
* where_to_work
 */
    public ?array $params = null;
}
