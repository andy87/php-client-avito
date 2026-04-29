<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getCourierDeliveryRange.
 */
class GetCourierDeliveryRangeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['status', 'result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\GetDeliveryCourierConfirmationResponse::class;

    /** @var array<string, mixed> Данные для отображения виджета подтверждения заказа продавцом */
    public array $result;

    /** @var string Response field status */
    public string $status;
}
