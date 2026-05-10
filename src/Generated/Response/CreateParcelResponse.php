<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /createParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 */
class CreateParcelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData::class, 'errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelResponse::class;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData|null Response field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError $errorData = null;
}
