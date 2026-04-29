<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Str\Realty;

use Andy87\ClientsAvito\Generated\Response\GetRealtyBookingsResponse as BaseGetRealtyBookingsResponse;

/**
 * Ответ Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Str\RealtyBooking> $bookings Список броней
 */
class GetBookingsResponse extends BaseGetRealtyBookingsResponse
{
}
