<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Promotion\Bbip;

use php_client_avito\Generated\Response\CreateBbipOrderForItemsV1Response as BaseCreateBbipOrderForItemsV1Response;

/**
 * Ответ Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 *
 * @property array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> $errors Информация об ошибках по объявлениям
 * @property string|null $orderId Идентификатор созданной заявки на подключение услуг продвижения
 */
class CreateOrderForItemsV1Response extends BaseCreateBbipOrderForItemsV1Response
{
}
