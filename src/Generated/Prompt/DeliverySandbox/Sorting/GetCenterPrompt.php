<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Sorting;

use php_client_avito\Generated\Prompt\GetSortingCenterPrompt as BaseGetSortingCenterPrompt;

/**
 * Класс данных запроса Avito API [GET] /delivery-sandbox/sorting-center.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetSortingCenter
 *
 * @property string $deliveryProviders Список кодов служб доставки, сортировочные центры которых необходимо вернуть
 */
class GetCenterPrompt extends BaseGetSortingCenterPrompt
{
}
