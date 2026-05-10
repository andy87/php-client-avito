<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Promotion\Order;

use php_client_avito\Generated\Prompt\GetOrderStatusV1Prompt as BaseGetOrderStatusV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/orders/status.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_order_status_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property string|null $orderId Идентификатор заявки на подключение услуг продвижения
 */
class GetStatusV1Prompt extends BaseGetOrderStatusV1Prompt
{
}
