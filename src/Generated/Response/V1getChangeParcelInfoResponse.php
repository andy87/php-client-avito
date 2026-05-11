<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData::class, 'errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReply::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData|null Response field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError $errorData = null;
}
