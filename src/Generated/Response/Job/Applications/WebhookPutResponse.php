<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsWebhookPutResponse as BaseApplicationsWebhookPutResponse;

/**
 * Ответ Avito API [PUT] /job/v1/applications/webhook.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookPut
 * 
 * @property string $secret сгенерированный ключ
 * @property string $url URL на который будут отправляться уведомления
 */
class WebhookPutResponse extends BaseApplicationsWebhookPutResponse
{
}
