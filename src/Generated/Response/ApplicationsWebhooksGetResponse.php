<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['webhooks' => [\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Job\WebhooksSubscriptionResultList::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
