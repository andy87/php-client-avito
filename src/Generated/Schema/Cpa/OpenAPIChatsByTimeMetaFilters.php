<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeMetaFilters.
 */
class OpenAPIChatsByTimeMetaFilters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['active' => 'active'];

    protected const REQUIRED_FIELDS = ['active'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['active' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters Schema field active */
    public \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters $active;
}
