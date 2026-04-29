<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

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

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderApplyTransitionResponse::class;

    /** @var bool|null Флаг успеха перевода в новый статус */
    public ?bool $success = null;
}
