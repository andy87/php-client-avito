<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Str;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/ParamPriceItemRealty.
 */
class ParamPriceItemRealty extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date_from' => 'date_from', 'date_to' => 'date_to', 'extra_guest_fee' => 'extra_guest_fee', 'minimal_duration' => 'minimal_duration', 'night_price' => 'night_price'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Дата начала периода, не в прошлом */
    public ?string $date_from = null;

    /** @var string|null Дата конца периода (включительно), не в прошлом */
    public ?string $date_to = null;

    /** @var int|null Доплата за гостя (рубли) */
    public ?int $extra_guest_fee = null;

    /** @var int|null Минимальная продолжительность (ночи), до 30 дней */
    public ?int $minimal_duration = null;

    /** @var int|null Цена проживания за ночь (рубли) */
    public ?int $night_price = null;
}
