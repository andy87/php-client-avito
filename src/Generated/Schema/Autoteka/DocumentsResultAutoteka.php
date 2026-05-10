<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/DocumentsResultAutoteka.
 */
class DocumentsResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pts' => 'pts', 'sts' => 'sts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['pts', 'sts'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Информация о ПТС */
    public ?array $pts = null;

    /** @var array<string, mixed>|null Информация об СТС */
    public ?array $sts = null;
}
