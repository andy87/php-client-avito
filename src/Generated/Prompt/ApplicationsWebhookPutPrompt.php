<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API applicationsWebhookPut.
 */
class ApplicationsWebhookPutPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/job/v1/applications/webhook';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['secret' => 'secret', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['secret', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['secret', 'url'];

    /** @var string сгенерированный ключ */
    public string $secret;

    /** @var string URL на который будут отправляться уведомления */
    public string $url;
}
