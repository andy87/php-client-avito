<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SalaryDetail.
 */
class SalaryDetail extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['base' => 'base', 'paid_period' => 'paid_period', 'taxes' => 'taxes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['base'];

    protected const CASTS = ['paid_period' => \and_y87\php_client_avito\Generated\Schema\Job\PaidPeriod::class, 'taxes' => \and_y87\php_client_avito\Generated\Schema\Job\Taxes::class];

    /** @var array<string, mixed>|null Оклад */
    public ?array $base = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\PaidPeriod|null Schema field paid_period */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\PaidPeriod $paid_period = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\Taxes|null Schema field taxes */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\Taxes $taxes = null;
}
