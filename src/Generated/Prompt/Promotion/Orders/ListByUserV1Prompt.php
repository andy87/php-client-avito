<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Promotion\Orders;

use php_client_avito\Generated\Prompt\ListOrdersByUserV1Prompt as BaseListOrdersByUserV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/orders/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/list_orders_by_user_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property array<string, mixed>|null $pagination Данные для постраничного чтения
 */
class ListByUserV1Prompt extends BaseListOrdersByUserV1Prompt
{
}
