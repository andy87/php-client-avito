<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/Budget.
 */
class Budget extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['maximal' => 'maximal', 'minimal' => 'minimal', 'priceRanges' => 'priceRanges', 'recommended' => 'recommended'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['maximal'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Максимальный бюджет кампании в рублях.<br/>**Возвращается только для типа кампании `AP`** */
    public ?array $maximal = null;

    /** @var array<string, mixed>|null Минимальный возможный бюджет кампании в рублях */
    public ?array $minimal = null;

    /** @var array<int, array<string, mixed>>|null Ценовые диапазоны покрытия склада (**только для типа кампании `AP`**) и предсказания. */
    public ?array $priceRanges = null;

    /** @var array<string, mixed>|null Рекомендуемый бюджет кампании в рублях */
    public ?array $recommended = null;
}
