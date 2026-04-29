<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelReply.
 */
class ChangeParcelReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData::class, 'error' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError|null Schema field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelError $error = null;
}
