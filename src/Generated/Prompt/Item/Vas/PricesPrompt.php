<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Item\Vas;

use and_y87\php_client_avito\Generated\Prompt\VasPricesPrompt as BaseVasPricesPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{userId}/vas/prices.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/vasPrices
 *
 * @property int $user_id Номер пользователя в Личном кабинете Авито
 * @property array<int, int> $itemIds Набор идентификаторов объявлений на сайте
 */
class PricesPrompt extends BaseVasPricesPrompt
{
}
