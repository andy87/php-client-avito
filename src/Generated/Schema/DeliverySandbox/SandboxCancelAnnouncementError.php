<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCancelAnnouncementError.
 */
class SandboxCancelAnnouncementError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field code */
    public string $code;

    /** @var string Schema field message */
    public string $message;
}
