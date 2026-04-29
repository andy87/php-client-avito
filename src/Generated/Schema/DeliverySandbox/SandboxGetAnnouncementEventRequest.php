<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxGetAnnouncementEventRequest.
 */
class SandboxGetAnnouncementEventRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;
}
