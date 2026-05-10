<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Str\Realty;

use php_client_avito\Generated\Prompt\PostRealtyPricesPrompt as BasePostRealtyPricesPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/accounts/{user_id}/items/{item_id}/prices.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postRealtyPrices
 *
 * @property int $user_id Номер пользователя в Личном кабинете Авито
 * @property int $item_id Идентификатор объявления на сайте
 * @property bool|null $skip_error Флаг, с которым вместо ошибок(если ошибка произошла с айтемом) возвращается 200 статус, без ошибки
 * @property array<int, \php_client_avito\Generated\Schema\Str\ParamPriceItemRealty> $prices Body field prices
 */
class PostPricesPrompt extends BasePostRealtyPricesPrompt
{
}
