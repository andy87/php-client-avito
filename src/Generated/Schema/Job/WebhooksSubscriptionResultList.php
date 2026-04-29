<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/WebhooksSubscriptionResultList.
 */
class WebhooksSubscriptionResultList extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['webhooks' => 'webhooks'];

    protected const REQUIRED_FIELDS = ['webhooks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['webhooks' => [\Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
