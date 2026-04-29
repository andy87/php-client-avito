<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/webhook/unsubscribe.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postWebhookUnsubscribe
 */
class PostWebhookUnsubscribePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/messenger/v1/webhook/unsubscribe';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['url'];

    /** @var string Url на который будут отправляться нотификации */
    public string $url;
}
