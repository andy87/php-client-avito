<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/WebhooksSubscriptionResultList.
 */
class WebhooksSubscriptionResultList extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['webhooks' => 'webhooks'];

    protected const REQUIRED_FIELDS = ['webhooks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['webhooks' => [\and_y87\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
