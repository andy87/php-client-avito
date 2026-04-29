<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ServiceInfoAutoteka.
 */
class ServiceInfoAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reportCompleteStatus' => 'reportCompleteStatus'];

    protected const REQUIRED_FIELDS = ['reportCompleteStatus'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Информация о завершенности отчета */
    public array $reportCompleteStatus;
}
