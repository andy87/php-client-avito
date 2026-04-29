<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCancelAnnouncementRequest.
 */
class SandboxCancelAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'options' => 'options'];

    protected const REQUIRED_FIELDS = ['options', 'announcementID', 'date'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions::class];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Дата события */
    public string $date;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions Schema field options */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions $options;
}
