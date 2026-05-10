<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Item\Item;

use php_client_avito\Generated\Prompt\GetItemInfoPrompt as BaseGetItemInfoPrompt;

/**
 * Класс данных запроса Avito API [GET] /core/v1/accounts/{user_id}/items/{item_id}/.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemInfo
 *
 * @property int $user_id Номер пользователя в Личном кабинете Авито
 * @property int $item_id Идентификатор объявления на сайте
 */
class GetInfoPrompt extends BaseGetItemInfoPrompt
{
}
