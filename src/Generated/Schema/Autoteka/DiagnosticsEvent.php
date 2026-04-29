<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/DiagnosticsEvent.
 */
class DiagnosticsEvent extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'condition' => 'condition', 'createdAt' => 'createdAt', 'damages' => 'damages', 'dealerName' => 'dealerName', 'mileage' => 'mileage', 'photos' => 'photos', 'region' => 'region'];

    protected const REQUIRED_FIELDS = ['dealerName', 'city', 'region', 'mileage', 'createdAt', 'condition', 'photos', 'damages'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['damages' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEventDamage::class], 'photos' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEventPhoto::class]];

    /** @var string Город проведения ДО */
    public string $city;

    /** @var array<string, mixed> Описание состояния автомобиля */
    public array $condition;

    /** @var int Дата проведения ДО UnixTime */
    public int $createdAt;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEventDamage> Массив событий с найденными на ДО повреждениями а/м */
    public array $damages;

    /** @var string Название компании проводившей ДО */
    public string $dealerName;

    /** @var int Пробег на момент ДО */
    public int $mileage;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEventPhoto> Массив фотографий с ДО */
    public array $photos;

    /** @var string Область проведения ДО */
    public string $region;
}
