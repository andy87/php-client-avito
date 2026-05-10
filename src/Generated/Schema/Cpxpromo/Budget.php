<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpxpromo;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/budget.
 */
class Budget extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgets' => 'budgets', 'maxLimitPenny' => 'maxLimitPenny', 'minLimitPenny' => 'minLimitPenny', 'recBudgetPenny' => 'recBudgetPenny'];

    protected const REQUIRED_FIELDS = ['budgets', 'minLimitPenny', 'maxLimitPenny', 'recBudgetPenny'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['budgets' => [\php_client_avito\Generated\Schema\Cpxpromo\BudgetValue::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Cpxpromo\BudgetValue> Schema field budgets */
    public array $budgets;

    /** @var int Максимальный лимит (в копейках) */
    public int $maxLimitPenny;

    /** @var int Минимальный лимит (в копейках) */
    public int $minLimitPenny;

    /** @var int Рекомендованный лимит (в копейках) */
    public int $recBudgetPenny;
}
