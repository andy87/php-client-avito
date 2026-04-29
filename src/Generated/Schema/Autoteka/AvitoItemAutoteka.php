<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/AvitoItemAutoteka.
 */
class AvitoItemAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'description' => 'description', 'images' => 'images', 'isCrashed' => 'isCrashed', 'mileage' => 'mileage', 'price' => 'price', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['date', 'title', 'price', 'description', 'images', 'mileage', 'isCrashed'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дата подачи объявления */
    public string $date;

    /** @var string Описание от продавца */
    public string $description;

    /** @var array<int, array<string, mixed>> Фото из объявления */
    public array $images;

    /** @var bool Отметка "битый" */
    public bool $isCrashed;

    /** @var int Пробег из объявления */
    public int $mileage;

    /** @var int Цена */
    public int $price;

    /** @var string Заголовок объявления */
    public string $title;
}
