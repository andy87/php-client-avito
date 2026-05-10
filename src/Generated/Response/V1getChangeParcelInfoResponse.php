<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getChangeParcelInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getChangeParcelInfo
 */
class V1getChangeParcelInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData::class, 'errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReply::class;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData|null Response field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError $errorData = null;
}
