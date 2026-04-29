<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Teaser.
 */
class Teaser extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['availableInfo' => 'availableInfo', 'avitoPlacements' => 'avitoPlacements', 'brand' => 'brand', 'color' => 'color', 'insights' => 'insights', 'mileage' => 'mileage', 'model' => 'model', 'owners' => 'owners', 'service' => 'service', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['brand', 'model', 'year', 'color', 'owners', 'mileage', 'service', 'avitoPlacements', 'insights', 'availableInfo'];

    protected const NULLABLE_FIELDS = ['brand', 'color', 'model', 'year'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Доступная информация в отчете */
    public array $availableInfo;

    /** @var array<string, mixed> Информация о размещениях на Авито */
    public array $avitoPlacements;

    /** @var string|null Бренд авто */
    public ?string $brand;

    /** @var string|null Цвет авто */
    public ?string $color;

    /** @var array<int, array<string, mixed>> Перечень инсайтов */
    public array $insights;

    /** @var array<string, mixed> Информация о пробеге */
    public array $mileage;

    /** @var string|null Модель авто */
    public ?string $model;

    /** @var array<string, mixed> Информация о владельцах */
    public array $owners;

    /** @var array<string, mixed> Информация о сервисном обслуживании */
    public array $service;

    /** @var int|null Год выпуска авто */
    public ?int $year;
}
