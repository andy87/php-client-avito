<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Promotion\Services;

use php_client_avito\Generated\Prompt\GetServicesByItemsV1Prompt as BaseGetServicesByItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_services_by_items_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property array<int, int>|null $itemIds Идентификаторы объявлений
 */
class GetByItemsV1Prompt extends BaseGetServicesByItemsV1Prompt
{
}
