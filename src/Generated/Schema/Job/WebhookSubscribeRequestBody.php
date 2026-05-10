<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
