<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/cancelParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/cancelParcel
 */
class CancelParcelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CancelParcelReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
