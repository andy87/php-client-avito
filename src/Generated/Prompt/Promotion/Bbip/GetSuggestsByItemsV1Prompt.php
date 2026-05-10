<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Promotion\Bbip;

use php_client_avito\Generated\Prompt\GetBbipSuggestsByItemsV1Prompt as BaseGetBbipSuggestsByItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/bbip/suggests/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_suggests_by_items_v1
 *
 * @property string|null $X_Is_Employee Пользователь работает от имени сотрудника компании (boolean, "true"\\"false")
 * @property array<int, int>|null $itemIds Идентификаторы объявлений
 */
class GetSuggestsByItemsV1Prompt extends BaseGetBbipSuggestsByItemsV1Prompt
{
}
