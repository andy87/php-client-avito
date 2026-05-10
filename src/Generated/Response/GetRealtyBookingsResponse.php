<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['bookings' => [\php_client_avito\Generated\Schema\Str\RealtyBooking::class]];

    protected const MODEL = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Str\RealtyBooking> Список броней */
    public array $bookings;
}
