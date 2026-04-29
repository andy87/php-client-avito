<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Orders;

use Andy87\ClientsAvito\Generated\Prompt\GetOrdersPrompt as BaseGetOrdersPrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/orders.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getOrders
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, string>|null $ids Идентификаторы заказов
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Status>|null $statuses Статус, по которому нужно получить заказы. - on_confirmation - ожидает подтверждения - ready_to_ship - ждет отправки - in_transit - в пути - canceled - отменный заказ - delivered - доставлен покупателю - on_return - на возврате - in_dispute - по заказу открыт спор - closed - заказ закрыт
 * @property int|null $dateFrom Метка времени, с момента которого созданы покупки
 * @property int|null $page Номер страницы для пагинации
 * @property int|null $limit Максимальное количество заказов на странице
 */
class GetPrompt extends BaseGetOrdersPrompt
{
}
