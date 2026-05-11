<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getRegisteredParcelID.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getRegisteredParcelID
 */
class V1getRegisteredParcelIDResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDError $errorData = null;
}
