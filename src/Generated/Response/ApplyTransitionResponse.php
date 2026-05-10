<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/applyTransition.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/applyTransition
 */
class ApplyTransitionResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\OrderManagement\OrderApplyTransitionResponse::class;

    /** @var bool|null Флаг успеха перевода в новый статус */
    public ?bool $success = null;
}
