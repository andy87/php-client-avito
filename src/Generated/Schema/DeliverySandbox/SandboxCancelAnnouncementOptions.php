<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCancelAnnouncementOptions.
 */
class SandboxCancelAnnouncementOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['urlToCancelAnnouncement' => 'urlToCancelAnnouncement'];

    protected const REQUIRED_FIELDS = ['urlToCancelAnnouncement'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL, куда отправлять отмену анонса. */
    public string $urlToCancelAnnouncement;
}
