<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Str\Realty;

use php_client_avito\Generated\Response\GetRealtyBookingsResponse as BaseGetRealtyBookingsResponse;

/**
 * Ответ Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 *
 * @property array<int, \php_client_avito\Generated\Schema\Str\RealtyBooking> $bookings Список броней
 */
class GetBookingsResponse extends BaseGetRealtyBookingsResponse
{
}
