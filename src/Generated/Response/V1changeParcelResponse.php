<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/changeParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1changeParcel
 */
class V1changeParcelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData::class, 'errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReply::class;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null Response field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError $errorData = null;
}
