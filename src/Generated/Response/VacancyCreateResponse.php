<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API vacancyCreate.
 */
class VacancyCreateResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['id' => 'id', 'url' => 'url', 'uuid' => 'uuid'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['uuid'];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\VacancyCreateResult::class;

    /** @var string|null Идентификатор добавленной вакансии на сайте. */
    public ?string $id = null;

    /** @var string|null URL добавленной вакансии. */
    public ?string $url = null;

    /** @var string|null Идентификатор добавленной вакансии. */
    public ?string $uuid = null;
}
