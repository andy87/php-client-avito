<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsTrackAnnouncementRequest.
 */
class AnnouncementsTrackAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'event' => 'event'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'event'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz Дата события */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var string Schema field event */
    public string $event;
}
