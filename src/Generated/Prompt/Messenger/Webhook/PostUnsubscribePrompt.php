<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Webhook;

use Andy87\ClientsAvito\Generated\Prompt\PostWebhookUnsubscribePrompt as BasePostWebhookUnsubscribePrompt;

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
