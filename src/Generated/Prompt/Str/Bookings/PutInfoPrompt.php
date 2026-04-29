<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Str\Bookings;

use Andy87\ClientsAvito\Generated\Prompt\PutBookingsInfoPrompt as BasePutBookingsInfoPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{user_id}/items/{item_id}/bookings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putBookingsInfo
 * 
 * @property array<int, array<string, mixed>>|null $bookings Список броней для выбранного объекта недвижимости (объявления)
 * @property string|null $source Название PMS системы
 */
class PutInfoPrompt extends BasePutBookingsInfoPrompt
{
}
