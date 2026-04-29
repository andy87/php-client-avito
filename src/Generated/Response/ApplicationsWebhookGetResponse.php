<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API applicationsWebhookGet.
 */
class ApplicationsWebhookGetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['secret' => 'secret', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\WebhookSubscribeRequestBody::class;

    /** @var string сгенерированный ключ */
    public string $secret;

    /** @var string URL на который будут отправляться уведомления */
    public string $url;
}
