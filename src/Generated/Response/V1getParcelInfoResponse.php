<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API v1getParcelInfo.
 */
class V1getParcelInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReply::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError $errorData = null;
}
