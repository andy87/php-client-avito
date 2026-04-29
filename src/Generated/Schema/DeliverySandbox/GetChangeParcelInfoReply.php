<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetChangeParcelInfoReply.
 */
class GetChangeParcelInfoReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData::class, 'error' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError|null Schema field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetChangeParcelInfoError $error = null;
}
