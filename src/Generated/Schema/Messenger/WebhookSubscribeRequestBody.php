<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Messenger;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
