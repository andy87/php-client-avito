<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementOptions.
 */
class SandboxCreateAnnouncementOptions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['urlToSendAnnouncement' => 'urlToSendAnnouncement'];

    protected const REQUIRED_FIELDS = ['urlToSendAnnouncement'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL, куда отправлять сформированный анонс. */
    public string $urlToSendAnnouncement;
}
