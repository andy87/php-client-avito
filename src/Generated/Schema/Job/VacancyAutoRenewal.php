<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyAutoRenewal.
 */
class VacancyAutoRenewal extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auto_renewal' => 'auto_renewal'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Schema field auto_renewal */
    public ?bool $auto_renewal = null;
}
