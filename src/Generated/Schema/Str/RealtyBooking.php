<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Str;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/RealtyBooking.
 */
class RealtyBooking extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avito_booking_id' => 'avito_booking_id', 'base_price' => 'base_price', 'check_in' => 'check_in', 'check_out' => 'check_out', 'contact' => 'contact', 'guest_count' => 'guest_count', 'nights' => 'nights', 'safe_deposit' => 'safe_deposit', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Идентификатор бронирования на Авито */
    public ?int $avito_booking_id = null;

    /** @var int|null Стоимость проживания на весь срок бронирования */
    public ?int $base_price = null;

    /** @var string|null Дата заезда гостей */
    public ?string $check_in = null;

    /** @var string|null Дата выезда гостей */
    public ?string $check_out = null;

    /** @var array<string, mixed>|null Контактная информация гостя */
    public ?array $contact = null;

    /** @var int|null Количество гостей */
    public ?int $guest_count = null;

    /** @var int|null Количество ночей */
    public ?int $nights = null;

    /** @var array<string, mixed>|null Сумма внесённой предоплаты */
    public ?array $safe_deposit = null;

    /** @var string|null Статус брони */
    public ?string $status = null;
}
