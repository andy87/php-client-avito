<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsTrackAnnouncementRequest.
 */
class AnnouncementsTrackAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'event' => 'event'];

    protected const REQUIRED_FIELDS = ['announcementID', 'date', 'event'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID::class, 'date' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz Дата события */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DateWithTz $date;

    /** @var string Schema field event */
    public string $event;
}
