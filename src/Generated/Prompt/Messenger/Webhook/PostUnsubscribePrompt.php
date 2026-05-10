<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Messenger\Webhook;

use php_client_avito\Generated\Prompt\PostWebhookUnsubscribePrompt as BasePostWebhookUnsubscribePrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/webhook/unsubscribe.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postWebhookUnsubscribe
 *
 * @property string $url Url на который будут отправляться нотификации
 */
class PostUnsubscribePrompt extends BasePostWebhookUnsubscribePrompt
{
}
