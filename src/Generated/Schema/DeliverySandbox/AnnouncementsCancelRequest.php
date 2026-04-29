<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsCancelRequest.
 */
class AnnouncementsCancelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'reason' => 'reason'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string|null Причина омены анонса */
    public ?string $reason = null;
}
