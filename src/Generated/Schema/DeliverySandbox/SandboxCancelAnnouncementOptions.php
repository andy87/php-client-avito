<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
