<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TechInspectionHistoryEvent.
 */
class TechInspectionHistoryEvent extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cardNumber' => 'cardNumber', 'endDate' => 'endDate', 'mileage' => 'mileage', 'startDate' => 'startDate'];

    protected const REQUIRED_FIELDS = ['startDate', 'endDate', 'mileage', 'cardNumber'];

    protected const NULLABLE_FIELDS = ['cardNumber', 'endDate', 'mileage'];

    protected const CASTS = [];

    /** @var string|null Номер диагностической карты */
    public ?string $cardNumber;

    /** @var int|null Действителен до */
    public ?int $endDate;

    /** @var int|null Пробег */
    public ?int $mileage;

    /** @var int Дата техосмотра */
    public int $startDate;
}
