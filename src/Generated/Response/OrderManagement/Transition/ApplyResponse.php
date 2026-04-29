<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\Transition;

use Andy87\ClientsAvito\Generated\Response\ApplyTransitionResponse as BaseApplyTransitionResponse;

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
