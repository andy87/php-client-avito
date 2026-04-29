<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ResumeSearchMeta.
 */
class ResumeSearchMeta extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cursor' => 'cursor', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Schema field cursor */
    public ?int $cursor = null;

    /** @var int|null Schema field page */
    public ?int $page = null;

    /** @var int|null Schema field pages */
    public ?int $pages = null;

    /** @var int|null Schema field per_page */
    public ?int $per_page = null;
}
