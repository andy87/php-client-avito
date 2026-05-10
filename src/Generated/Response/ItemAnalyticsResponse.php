<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /stats/v2/accounts/{user_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemAnalytics
 */
class ItemAnalyticsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\Item\AnalyticsResponse::class;

    /** @var array<string, mixed>|null Response field result */
    public ?array $result = null;
}
