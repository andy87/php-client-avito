<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /sandbox/changeParcels.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcels
 */
class ChangeParcelsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData::class, 'errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsResponse::class;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null Response field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError $errorData = null;
}
