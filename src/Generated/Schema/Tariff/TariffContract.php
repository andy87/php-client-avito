<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Tariff;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito tariff/TariffContract.
 */
class TariffContract extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bonus' => 'bonus', 'closeTime' => 'closeTime', 'isActive' => 'isActive', 'level' => 'level', 'packages' => 'packages', 'price' => 'price', 'startTime' => 'startTime'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['packages' => [\Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContractPackage::class]];

    /** @var int|null Количество бонусов на продвижение по тарифу */
    public ?int $bonus = null;

    /** @var int|null Дата и время окончания в формате Unix time. Для неактивных тарифов значение поля будет null */
    public ?int $closeTime = null;

    /** @var bool|null Признак активности */
    public ?bool $isActive = null;

    /** @var string|null Уровень тарифа */
    public ?string $level = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContractPackage>|null Пакеты размещений, доступные в рамках тарифа */
    public ?array $packages = null;

    /** @var array<string, mixed>|null Стоимость тарифа */
    public ?array $price = null;

    /** @var int|null Дата и время начала в формате Unix time */
    public ?int $startTime = null;
}
