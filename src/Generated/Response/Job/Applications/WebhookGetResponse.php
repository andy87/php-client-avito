<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhookGetResponse as BaseApplicationsWebhookGetResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/webhook.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookGet
 * 
 * @property string $secret сгенерированный ключ
 * @property string $url URL на который будут отправляться уведомления
 */
class WebhookGetResponse extends BaseApplicationsWebhookGetResponse
{
}
