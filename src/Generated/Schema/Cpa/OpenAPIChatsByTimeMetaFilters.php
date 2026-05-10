<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeMetaFilters.
 */
class OpenAPIChatsByTimeMetaFilters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['active' => 'active'];

    protected const REQUIRED_FIELDS = ['active'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['active' => \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters::class];

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters Schema field active */
    public \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeFilters $active;
}
