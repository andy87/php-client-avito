<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['webhooks' => [\and_y87\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\WebhooksSubscriptionResultList::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody> список вебхуков */
    public array $webhooks;
}
