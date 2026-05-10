<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\OrderManagement\Transition;

use php_client_avito\Generated\Response\ApplyTransitionResponse as BaseApplyTransitionResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/applyTransition.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/applyTransition
 *
 * @property bool|null $success Флаг успеха перевода в новый статус
 */
class ApplyResponse extends BaseApplyTransitionResponse
{
}
