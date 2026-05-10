<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Str\Realty;

use php_client_avito\Generated\Prompt\GetRealtyBookingsPrompt as BaseGetRealtyBookingsPrompt;

/**
 * Класс данных запроса Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 *
 * @property int $user_id Номер пользователя в Личном кабинете Авито
 * @property int $item_id Идентификатор объявления на сайте
 * @property bool|null $skip_error Флаг, с которым вместо ошибок(если ошибка произошла с айтемом) возвращается 200 статус, без ошибки
 * @property string $date_start Фильтр, ограничивающий выборку по нижней границе дат, не в прошлом
 * @property string $date_end Фильтр, ограничивающий выборку по верхней границе дат, не в прошлом
 * @property bool|null $with_unpaid Флаг, позволяющий получить неоплаченные брони (возвращаются в статусе pending)
 */
class GetBookingsPrompt extends BaseGetRealtyBookingsPrompt
{
}
