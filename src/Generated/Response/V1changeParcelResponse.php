<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData::class, 'errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReply::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null Response field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError $errorData = null;
}
