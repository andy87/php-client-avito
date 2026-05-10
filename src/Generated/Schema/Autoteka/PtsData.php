<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PtsData.
 */
class PtsData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pts' => 'pts', 'sts' => 'sts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Данные ПТС */
    public ?array $pts = null;

    /** @var array<string, mixed>|null Данные СТС */
    public ?array $sts = null;
}
