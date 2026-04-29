<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/bbip/suggests/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_suggests_by_items_v1
 */
class GetBbipSuggestsByItemsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestByItemV1::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Promotion\GetBbipSuggestsV1Resp::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках получения варианта бюджета */
    public array $errors;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestByItemV1> Предлагаемые варианты бюджетов по каждому объявлению */
    public array $items;
}
