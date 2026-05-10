<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData::class, 'errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsResponse::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null Response field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError $errorData = null;
}
