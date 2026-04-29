<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyCreateResult.
 */
class VacancyCreateResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'url' => 'url', 'uuid' => 'uuid'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['uuid'];

    protected const CASTS = [];

    /** @var string|null Идентификатор добавленной вакансии на сайте. */
    public ?string $id = null;

    /** @var string|null URL добавленной вакансии. */
    public ?string $url = null;

    /** @var string|null Идентификатор добавленной вакансии. */
    public ?string $uuid = null;
}
