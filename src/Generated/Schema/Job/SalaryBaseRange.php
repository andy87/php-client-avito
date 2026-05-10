<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SalaryBaseRange.
 */
class SalaryBaseRange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['from' => 'from', 'to' => 'to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['from', 'to'];

    protected const CASTS = [];

    /** @var int|null Нижняя граница оклада, рублей за paid_period */
    public ?int $from = null;

    /** @var int|null Верхняя граница оклада, рублей за paid_period */
    public ?int $to = null;
}
