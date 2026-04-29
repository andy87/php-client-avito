<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Messenger\Subscriptions;

use Andy87\ClientsAvito\Generated\Response\GetSubscriptionsResponse as BaseGetSubscriptionsResponse;

/**
 * Ответ Avito API [POST] /messenger/v1/subscriptions.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getSubscriptions
 * 
 * @property array<int, array<string, mixed>> $subscriptions Response field subscriptions
 */
class GetResponse extends BaseGetSubscriptionsResponse
{
}
