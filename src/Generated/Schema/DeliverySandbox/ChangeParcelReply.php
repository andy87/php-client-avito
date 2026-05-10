<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelReply.
 */
class ChangeParcelReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData::class, 'error' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData|null Schema field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelReplyData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError|null Schema field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelError $error = null;
}
