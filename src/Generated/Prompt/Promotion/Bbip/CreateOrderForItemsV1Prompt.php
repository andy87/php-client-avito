<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Promotion\Bbip;

use and_y87\php_client_avito\Generated\Prompt\CreateBbipOrderForItemsV1Prompt as BaseCreateBbipOrderForItemsV1Prompt;

/**
 * Класс данных запроса Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\BbipOrderByItemV1> $items Заявки на подключение BBIP по отдельным объявлениям
 */
class CreateOrderForItemsV1Prompt extends BaseCreateBbipOrderForItemsV1Prompt
{
}
