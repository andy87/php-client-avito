<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = ['url' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['url'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null URL, на который отправляются уведомления */
    public ?string $url = null;
}
