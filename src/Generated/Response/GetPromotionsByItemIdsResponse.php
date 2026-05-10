<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpxpromo/1/getPromotionsByItemIds.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getPromotionsByItemIds
 */
class GetPromotionsByItemIdsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\Cpxpromo\GetPromotionsByItemIdsOut::class;

    /** @var array<int, array<string, mixed>> Response field items */
    public array $items;
}
