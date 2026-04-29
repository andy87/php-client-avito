<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Applications;

use Andy87\ClientsAvito\Generated\Prompt\ApplicationsWebhookDeletePrompt as BaseApplicationsWebhookDeletePrompt;

/**
 * Класс данных запроса Avito API [DELETE] /job/v1/applications/webhook.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookDelete
 * 
 * @property string|null $url URL, на который отправляются уведомления
 */
class WebhookDeletePrompt extends BaseApplicationsWebhookDeletePrompt
{
}
