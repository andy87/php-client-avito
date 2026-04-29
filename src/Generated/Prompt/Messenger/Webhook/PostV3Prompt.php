<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Webhook;

use Andy87\ClientsAvito\Generated\Prompt\PostWebhookV3Prompt as BasePostWebhookV3Prompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v3/webhook.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postWebhookV3
 * 
 * @property string $url Url на который будут отправляться нотификации
 */
class PostV3Prompt extends BasePostWebhookV3Prompt
{
}
