<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Customs.
 */
class Customs extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['color' => 'color', 'company' => 'company', 'createdAt' => 'createdAt', 'ecology' => 'ecology', 'fromCountry' => 'fromCountry', 'mileage' => 'mileage', 'owner' => 'owner', 'specification' => 'specification', 'statPrice' => 'statPrice', 'toCountry' => 'toCountry'];

    protected const REQUIRED_FIELDS = ['createdAt', 'color', 'owner', 'ecology', 'mileage', 'toCountry', 'fromCountry', 'statPrice', 'specification'];

    protected const NULLABLE_FIELDS = ['color', 'company', 'createdAt', 'ecology', 'fromCountry', 'mileage', 'owner', 'specification', 'statPrice', 'toCountry'];

    protected const CASTS = [];

    /** @var string|null Цвет */
    public ?string $color;

    /** @var string|null Компания */
    public ?string $company = null;

    /** @var int|null Дата растаможки */
    public ?int $createdAt;

    /** @var string|null Эко-стандарт */
    public ?string $ecology;

    /** @var string|null Страна вывоза */
    public ?string $fromCountry;

    /** @var int|null Пробег */
    public ?int $mileage;

    /** @var string|null Получатель */
    public ?string $owner;

    /** @var string|null Спецификация */
    public ?string $specification;

    /** @var float|null Оценочная стоимость ТС */
    public ?float $statPrice;

    /** @var string|null Страна ввоза */
    public ?string $toCountry;
}
