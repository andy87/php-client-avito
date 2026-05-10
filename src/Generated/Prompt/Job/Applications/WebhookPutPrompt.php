<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Job\Applications;

use php_client_avito\Generated\Prompt\ApplicationsWebhookPutPrompt as BaseApplicationsWebhookPutPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v1/applications/webhook.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookPut
 *
 * @property string $secret сгенерированный ключ
 * @property string $url URL на который будут отправляться уведомления
 */
class WebhookPutPrompt extends BaseApplicationsWebhookPutPrompt
{
}
