<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getSubscriptions.
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
