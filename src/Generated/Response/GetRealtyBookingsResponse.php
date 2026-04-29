<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 */
class GetRealtyBookingsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['bookings' => 'bookings'];

    protected const REQUIRED_FIELDS = ['bookings'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['bookings' => [\Andy87\ClientsAvito\Generated\Schema\Str\RealtyBooking::class]];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Str\RealtyBooking> Список броней */
    public array $bookings;
}
