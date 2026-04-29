<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoReply.
 */
class GetSandboxParcelInfoReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData::class, 'error' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError|null Schema field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetSandboxParcelInfoError $error = null;
}
