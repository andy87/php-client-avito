<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/MetaAutoload.
 */
class MetaAutoload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Количество ресурсов на страницу */
    public ?int $page = null;

    /** @var int|null Количество страниц */
    public ?int $pages = null;

    /** @var int|null Количество ресурсов на страницу */
    public ?int $per_page = null;
}
