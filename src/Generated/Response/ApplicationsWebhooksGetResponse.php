<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/webhooks.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhooksGet
 */
class ApplicationsWebhooksGetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['webhooks' => 'webhooks'];

    protected const REQUIRED_FIELDS = ['webhooks'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['webhooks' => [\Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\WebhooksSubscriptionResultList::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
