<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/webhookSubscribeRequestBody.
 */
class WebhookSubscribeRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Url на который будут отправляться нотификации */
    public string $url;
}
