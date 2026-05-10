<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpa;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeFilters.
 */
class OpenAPIChatsByTimeFilters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field dateFrom */
    public string $dateFrom;

    /** @var string Schema field dateTo */
    public string $dateTo;
}
