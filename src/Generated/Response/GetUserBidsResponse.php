<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /auction/1/bids.
 *
 * @documentation https://developers.avito.ru/api-catalog/auction/documentation#operation/getUserBids
 */
class GetUserBidsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var array<int, array<string, mixed>>|null Response field items */
    public ?array $items = null;
}
