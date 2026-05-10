<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\OrderManagement\ReturnValue;

use php_client_avito\Generated\Prompt\AcceptReturnOrderPrompt as BaseAcceptReturnOrderPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/acceptReturnOrder.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/acceptReturnOrder
 *
 * @property string|null $orderId ID заказа в Авито
 * @property array<string, mixed>|null $recipient Данные человека, который будет забирать возвратную посылку
 * @property string|null $terminalNumber Номер отделения Почты России, куда придёт возвратная посылка.
 */
class AcceptOrderPrompt extends BaseAcceptReturnOrderPrompt
{
}
