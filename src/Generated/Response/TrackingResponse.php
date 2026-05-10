<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/tracking.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/tracking
 */
class TrackingResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\DeliverySetStatusReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
