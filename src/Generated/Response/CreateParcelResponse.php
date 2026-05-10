<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData::class, 'errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelResponse::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData|null Response field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError $errorData = null;
}
