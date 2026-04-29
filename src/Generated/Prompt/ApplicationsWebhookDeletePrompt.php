<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [DELETE] /job/v1/applications/webhook.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookDelete
 */
class ApplicationsWebhookDeletePrompt extends AbstractPrompt
{
    protected const METHOD = 'DELETE';

    protected const ENDPOINT = '/job/v1/applications/webhook';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['url'];

    protected const BODY_FIELDS = [];

    /** @var string|null URL, на который отправляются уведомления */
    public ?string $url = null;
}
