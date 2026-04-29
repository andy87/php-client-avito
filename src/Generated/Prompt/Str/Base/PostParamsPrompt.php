<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Str\Base;

use Andy87\ClientsAvito\Generated\Prompt\PostBaseParamsPrompt as BasePostBaseParamsPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/items/{item_id}/base.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postBaseParams
 * 
 * @property array<int, array<string, mixed>>|null $discount Скидки при бронировании от threshold ночей
 * @property int|null $extra_guest_fee Доплата за гостя (рубли)
 * @property int|null $extra_guest_threshold Порог гостей, при котором цена - night_price
 * @property array<string, mixed>|null $fees Настройки доплат
 * @property array<string, mixed>|null $instant Параметры мгновенного бронирования
 * @property int|null $minimal_duration Минимальная продолжительность (ночи)
 * @property int|null $night_price Цена проживания за ночь (рубли)
 * @property array<string, mixed>|null $refund Параметры возврата
 */
class PostParamsPrompt extends BasePostBaseParamsPrompt
{
}
