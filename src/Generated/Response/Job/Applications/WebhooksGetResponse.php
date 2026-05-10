<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Job\Applications;

use php_client_avito\Generated\Response\ApplicationsWebhooksGetResponse as BaseApplicationsWebhooksGetResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/webhooks.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhooksGet
 *
 * @property array<int, \php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody> $webhooks список вебхуков
 */
class WebhooksGetResponse extends BaseApplicationsWebhooksGetResponse
{
}
