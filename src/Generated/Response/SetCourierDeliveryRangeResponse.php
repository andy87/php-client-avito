<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/setCourierDeliveryRange.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setCourierDeliveryRange
 */
class SetCourierDeliveryRangeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\OrderManagement\SetCourierDeliveryRangeResponse::class;

    /** @var bool|null Флаг успеха выбора времени приезда курьера */
    public ?bool $success = null;
}
