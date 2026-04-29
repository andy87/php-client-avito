<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Tariff;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito tariff/TariffContractPackage.
 */
class TariffContractPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories', 'locations' => 'locations', 'priceConditions' => 'priceConditions', 'remain' => 'remain', 'total' => 'total'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Доступные категории для размещений из пакета */
    public ?array $categories = null;

    /** @var array<int, string>|null Доступные локации для размещений из пакета */
    public ?array $locations = null;

    /** @var array<int, array<string, mixed>>|null Ценовая группа */
    public ?array $priceConditions = null;

    /** @var int|null Оставшееся число размещений в пакете */
    public ?int $remain = null;

    /** @var int|null Размер пакета */
    public ?int $total = null;
}
