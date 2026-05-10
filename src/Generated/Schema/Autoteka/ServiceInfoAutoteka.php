<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
