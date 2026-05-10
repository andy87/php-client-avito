<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/WebhooksSubscriptionResultList.
 */
class WebhooksSubscriptionResultList extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['webhooks' => 'webhooks'];

    protected const REQUIRED_FIELDS = ['webhooks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['webhooks' => [\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
