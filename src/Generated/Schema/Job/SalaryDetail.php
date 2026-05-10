<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SalaryDetail.
 */
class SalaryDetail extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['base' => 'base', 'paid_period' => 'paid_period', 'taxes' => 'taxes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['base'];

    protected const CASTS = ['paid_period' => \php_client_avito\Generated\Schema\Job\PaidPeriod::class, 'taxes' => \php_client_avito\Generated\Schema\Job\Taxes::class];

    /** @var array<string, mixed>|null Оклад */
    public ?array $base = null;

    /** @var \php_client_avito\Generated\Schema\Job\PaidPeriod|null Schema field paid_period */
    public ?\php_client_avito\Generated\Schema\Job\PaidPeriod $paid_period = null;

    /** @var \php_client_avito\Generated\Schema\Job\Taxes|null Schema field taxes */
    public ?\php_client_avito\Generated\Schema\Job\Taxes $taxes = null;
}
