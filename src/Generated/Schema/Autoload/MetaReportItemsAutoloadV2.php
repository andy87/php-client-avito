<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/MetaReportItemsAutoloadV2.
 */
class MetaReportItemsAutoloadV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'total' => 'total'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Номер страницы */
    public ?int $page = null;

    /** @var int|null Общее количество страниц */
    public ?int $pages = null;

    /** @var int|null Количество объявлений на странице */
    public ?int $per_page = null;

    /** @var int|null Общее количество объявлений в отчёте */
    public ?int $total = null;
}
