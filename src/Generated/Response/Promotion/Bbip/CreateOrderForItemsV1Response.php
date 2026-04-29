<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Response\CreateBbipOrderForItemsV1Response as BaseCreateBbipOrderForItemsV1Response;

/**
 * Ответ Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> $errors Информация об ошибках по объявлениям
 * @property string|null $orderId Идентификатор созданной заявки на подключение услуг продвижения
 */
class CreateOrderForItemsV1Response extends BaseCreateBbipOrderForItemsV1Response
{
}
