<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpxpromo;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/autoPromotion.
 */
class AutoPromotion extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgetPenny' => 'budgetPenny', 'budgetType' => 'budgetType'];

    protected const REQUIRED_FIELDS = ['budgetPenny', 'budgetType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Текущий бюджет в копейках */
    public int $budgetPenny;

    /** @var string Тип бюджета ("1d" - дневной | "7d" - недельный | "30d" - месячный) */
    public string $budgetType;
}
