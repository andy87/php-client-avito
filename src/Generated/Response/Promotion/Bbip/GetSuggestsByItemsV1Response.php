<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Response\GetBbipSuggestsByItemsV1Response as BaseGetBbipSuggestsByItemsV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/bbip/suggests/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_suggests_by_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> $errors Информация об ошибках получения варианта бюджета
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestByItemV1> $items Предлагаемые варианты бюджетов по каждому объявлению
 */
class GetSuggestsByItemsV1Response extends BaseGetBbipSuggestsByItemsV1Response
{
}
