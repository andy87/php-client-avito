<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
