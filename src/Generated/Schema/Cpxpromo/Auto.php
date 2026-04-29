<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/auto.
 */
class Auto extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType', 'dailyBudget' => 'dailyBudget', 'maxBudgetPenny' => 'maxBudgetPenny', 'minBudgetPenny' => 'minBudgetPenny', 'monthlyBudget' => 'monthlyBudget', 'weeklyBudget' => 'weeklyBudget'];

    protected const REQUIRED_FIELDS = ['minBudgetPenny', 'maxBudgetPenny', 'dailyBudget', 'weeklyBudget', 'monthlyBudget'];

    protected const NULLABLE_FIELDS = ['budgetPenny', 'budgetType'];

    protected const CASTS = ['dailyBudget' => \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget::class, 'monthlyBudget' => \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget::class, 'weeklyBudget' => \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget::class];

    /** @var int|null Текущий бюджет (в копейках) */
    public ?int $budgetPenny = null;

    /** @var string|null Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public ?string $budgetType = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget Schema field dailyBudget */
    public \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget $dailyBudget;

    /** @var int Максимальный бюджет (в копейках) */
    public int $maxBudgetPenny;

    /** @var int Минимальный бюджет (в копейках) */
    public int $minBudgetPenny;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget Schema field monthlyBudget */
    public \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget $monthlyBudget;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget Schema field weeklyBudget */
    public \Andy87\ClientsAvito\Generated\Schema\Cpxpromo\Budget $weeklyBudget;
}
