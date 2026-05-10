<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/webhook.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsWebhookGet
 */
class ApplicationsWebhookGetResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['secret' => 'secret', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\WebhookSubscribeRequestBody::class;

    /** @var string сгенерированный ключ */
    public string $secret;

    /** @var string URL на который будут отправляться уведомления */
    public string $url;
}
