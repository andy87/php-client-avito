<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpxpromo;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/auto.
 */
class Auto extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType', 'dailyBudget' => 'dailyBudget', 'maxBudgetPenny' => 'maxBudgetPenny', 'minBudgetPenny' => 'minBudgetPenny', 'monthlyBudget' => 'monthlyBudget', 'weeklyBudget' => 'weeklyBudget'];

    protected const REQUIRED_FIELDS = ['minBudgetPenny', 'maxBudgetPenny', 'dailyBudget', 'weeklyBudget', 'monthlyBudget'];

    protected const NULLABLE_FIELDS = ['budgetPenny', 'budgetType'];

    protected const CASTS = ['dailyBudget' => \php_client_avito\Generated\Schema\Cpxpromo\Budget::class, 'monthlyBudget' => \php_client_avito\Generated\Schema\Cpxpromo\Budget::class, 'weeklyBudget' => \php_client_avito\Generated\Schema\Cpxpromo\Budget::class];

    /** @var int|null Текущий бюджет (в копейках) */
    public ?int $budgetPenny = null;

    /** @var string|null Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public ?string $budgetType = null;

    /** @var \php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field dailyBudget */
    public \php_client_avito\Generated\Schema\Cpxpromo\Budget $dailyBudget;

    /** @var int Максимальный бюджет (в копейках) */
    public int $maxBudgetPenny;

    /** @var int Минимальный бюджет (в копейках) */
    public int $minBudgetPenny;

    /** @var \php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field monthlyBudget */
    public \php_client_avito\Generated\Schema\Cpxpromo\Budget $monthlyBudget;

    /** @var \php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field weeklyBudget */
    public \php_client_avito\Generated\Schema\Cpxpromo\Budget $weeklyBudget;
}
