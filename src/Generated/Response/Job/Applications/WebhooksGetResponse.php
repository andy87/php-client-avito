<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhooksGetResponse as BaseApplicationsWebhooksGetResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/webhooks.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhooksGet
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody> $webhooks список вебхуков
 */
class WebhooksGetResponse extends BaseApplicationsWebhooksGetResponse
{
}
