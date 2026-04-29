<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

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

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReply::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError $errorData = null;
}
