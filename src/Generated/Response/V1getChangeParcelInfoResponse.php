<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

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

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReply::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError $errorData = null;
}
