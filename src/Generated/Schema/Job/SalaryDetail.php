<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/SalaryDetail.
 */
class SalaryDetail extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['base' => 'base', 'paid_period' => 'paid_period', 'taxes' => 'taxes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['base'];

    protected const CASTS = ['paid_period' => \Andy87\ClientsAvito\Generated\Schema\Job\PaidPeriod::class, 'taxes' => \Andy87\ClientsAvito\Generated\Schema\Job\Taxes::class];

    /** @var array<string, mixed>|null Оклад */
    public ?array $base = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\PaidPeriod|null Schema field paid_period */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\PaidPeriod $paid_period = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Taxes|null Schema field taxes */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Taxes $taxes = null;
}
