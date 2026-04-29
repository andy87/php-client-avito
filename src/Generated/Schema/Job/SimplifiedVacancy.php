<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SimplifiedVacancy.
 */
class SimplifiedVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressDetails' => 'addressDetails', 'businessArea' => 'businessArea', 'companyName' => 'companyName', 'link' => 'link', 'profession' => 'profession', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field addressDetails */
    public ?array $addressDetails = null;

    /** @var string|null Schema field businessArea */
    public ?string $businessArea = null;

    /** @var string|null Schema field companyName */
    public ?string $companyName = null;

    /** @var string|null Schema field link */
    public ?string $link = null;

    /** @var string|null Schema field profession */
    public ?string $profession = null;

    /** @var string|null Schema field title */
    public ?string $title = null;
}
