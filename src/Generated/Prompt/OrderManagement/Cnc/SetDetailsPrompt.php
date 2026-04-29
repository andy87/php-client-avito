<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Cnc;

use Andy87\ClientsAvito\Generated\Prompt\CncSetDetailsPrompt as BaseCncSetDetailsPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/cncSetDetails.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/cncSetDetails
 * 
 * @property string $Authorization Токен для авторизации
 * @property string|null $address Адрес получения товара
 * @property int $bookingPeriod Сроки бронирования товара
 * @property string|null $details Комментарий, который получит покупатель
 * @property string $id ID заказа в Авито
 * @property string $marketplaceId Номер заказа в Авито в новой системе
 */
class SetDetailsPrompt extends BaseCncSetDetailsPrompt
{
}
