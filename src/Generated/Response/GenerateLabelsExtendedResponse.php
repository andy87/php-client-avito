<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/orders/labels/extended.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabelsExtended
 */
class GenerateLabelsExtendedResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['taskID' => 'taskID'];

    protected const REQUIRED_FIELDS = ['taskID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\OrderManagement\OrdersLabelsResponse::class;

    /** @var string ID задачи (документа) */
    public string $taskID;
}
