<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/WebhookSubscribeRequestBody.
 */
class WebhookSubscribeRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['secret' => 'secret', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string сгенерированный ключ */
    public string $secret;

    /** @var string URL на который будут отправляться уведомления */
    public string $url;
}
