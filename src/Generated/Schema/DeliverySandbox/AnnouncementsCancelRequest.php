<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsCancelRequest.
 */
class AnnouncementsCancelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'reason' => 'reason'];

    protected const REQUIRED_FIELDS = ['announcementID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['announcementID' => \php_client_avito\Generated\Schema\DeliverySandbox\UUID::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\UUID Schema field announcementID */
    public \php_client_avito\Generated\Schema\DeliverySandbox\UUID $announcementID;

    /** @var string|null Причина омены анонса */
    public ?string $reason = null;
}
