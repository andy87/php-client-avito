<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Courier;

use Andy87\ClientsAvito\Generated\Prompt\SetCourierDeliveryRangePrompt as BaseSetCourierDeliveryRangePrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/setCourierDeliveryRange.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setCourierDeliveryRange
 * 
 * @property string $Authorization Токен для авторизации
 * @property string $address Адрес продавца
 * @property string|null $addressDetails Детали адреса продавца
 * @property string $endDate Конечная дата приезда курьера
 * @property string $intervalType Тип интервала
 * @property string $name ФИО
 * @property string $orderId ID заказа
 * @property string $phone Телефон
 * @property string $startDate Начальная дата приезда курьера
 */
class SetDeliveryRangePrompt extends BaseSetCourierDeliveryRangePrompt
{
}
