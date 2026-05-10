<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /messenger/v1/subscriptions.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getSubscriptions
 */
class GetSubscriptionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['subscriptions' => 'subscriptions'];

    protected const REQUIRED_FIELDS = ['subscriptions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var array<int, array<string, mixed>> Response field subscriptions */
    public array $subscriptions;
}
