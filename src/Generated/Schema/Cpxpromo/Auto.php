<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/auto.
 */
class Auto extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType', 'dailyBudget' => 'dailyBudget', 'maxBudgetPenny' => 'maxBudgetPenny', 'minBudgetPenny' => 'minBudgetPenny', 'monthlyBudget' => 'monthlyBudget', 'weeklyBudget' => 'weeklyBudget'];

    protected const REQUIRED_FIELDS = ['minBudgetPenny', 'maxBudgetPenny', 'dailyBudget', 'weeklyBudget', 'monthlyBudget'];

    protected const NULLABLE_FIELDS = ['budgetPenny', 'budgetType'];

    protected const CASTS = ['dailyBudget' => \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget::class, 'monthlyBudget' => \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget::class, 'weeklyBudget' => \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget::class];

    /** @var int|null Текущий бюджет (в копейках) */
    public ?int $budgetPenny = null;

    /** @var string|null Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public ?string $budgetType = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field dailyBudget */
    public \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget $dailyBudget;

    /** @var int Максимальный бюджет (в копейках) */
    public int $maxBudgetPenny;

    /** @var int Минимальный бюджет (в копейках) */
    public int $minBudgetPenny;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field monthlyBudget */
    public \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget $monthlyBudget;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget Schema field weeklyBudget */
    public \and_y87\php_client_avito\Generated\Schema\Cpxpromo\Budget $weeklyBudget;
}
