<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\ReturnValue;

use Andy87\ClientsAvito\Generated\Response\AcceptReturnOrderResponse as BaseAcceptReturnOrderResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/acceptReturnOrder.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/acceptReturnOrder
 * 
 * @property bool|null $success Флаг успеха указанного ПВЗ для возврата
 */
class AcceptOrderResponse extends BaseAcceptReturnOrderResponse
{
}
