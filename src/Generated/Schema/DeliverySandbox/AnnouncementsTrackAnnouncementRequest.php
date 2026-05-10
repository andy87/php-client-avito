<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsTrackAnnouncementRequest.
 */
class AnnouncementsTrackAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'event' => 'event'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'event'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \php_client_avito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz Дата события */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var string Schema field event */
    public string $event;
}
