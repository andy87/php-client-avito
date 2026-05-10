<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\OrderManagement\Transition;

use and_y87\php_client_avito\Generated\Prompt\ApplyTransitionPrompt as BaseApplyTransitionPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/applyTransition.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/applyTransition
 *
 * @property string|null $orderId ID заказа в Авито
 * @property array<string, mixed>|null $params Дополнительные параметры доставки
 * @property string|null $transition Название перехода. * `confirm` - подтверждение заказа; * `reject` - отмена заказа; * `perform` - подтверждение отправки заказа (RDBS); * `receive` - подтверждение доставки заказа (RDBS, CNC).
 */
class ApplyPrompt extends BaseApplyTransitionPrompt
{
}
