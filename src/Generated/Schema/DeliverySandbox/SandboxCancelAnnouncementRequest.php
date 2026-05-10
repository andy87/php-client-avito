<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCancelAnnouncementRequest.
 */
class SandboxCancelAnnouncementRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['announcementID' => 'announcementID', 'date' => 'date', 'options' => 'options'];

    protected const REQUIRED_FIELDS = ['options', 'announcementID', 'date'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions::class];

    /** @var string Уникальный идентификатор анонса UUID V4. */
    public string $announcementID;

    /** @var string Дата события */
    public string $date;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions Schema field options */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SandboxCancelAnnouncementOptions $options;
}
