<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\OrderManagement\ReturnValue;

use and_y87\php_client_avito\Generated\Response\AcceptReturnOrderResponse as BaseAcceptReturnOrderResponse;

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
