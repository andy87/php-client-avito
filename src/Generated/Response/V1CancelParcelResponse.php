<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API v1CancelParcel.
 */
class V1CancelParcelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelReply::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelError $errorData = null;
}
