<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Prompt\CreateBbipOrderForItemsV1Prompt as BaseCreateBbipOrderForItemsV1Prompt;

/**
 * Класс данных запроса Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipOrderByItemV1> $items Заявки на подключение BBIP по отдельным объявлениям
 */
class CreateOrderForItemsV1Prompt extends BaseCreateBbipOrderForItemsV1Prompt
{
}
