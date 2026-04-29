<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Item;

use Andy87\ClientsAvito\Generated\Prompt\PutItemVasPackageV2Prompt as BasePutItemVasPackageV2Prompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v2/accounts/{user_id}/items/{item_id}/vas_packages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVasPackageV2
 * 
 * @property string $package_id Идентификатор пакета услуг, возможные варианты значения: - `x2_1` - применение пакета До 2 раз больше просмотров на 1 день - `x2_7` - применение пакета До 2 раз больше просмотров на 7 дней - `x5_1` - применение пакета До 5 раз больше просмотров на 1 день - `x5_7` - применение пакета До 5 раз больше просмотров на 7 дней - `x10_1` - применение пакета До 10 раз больше просмотров на 1 день - `x10_7` - применение пакета До 10 раз больше просмотров на 7 дней В некоторых регионах и категориях также доступны дополнительные варианты: - `x15_1` - применение пакета До 15 раз больше просмотров на 1 день - `x15_7` - применение пакета До 15 раз больше просмотров на 7 дней - `x20_1` - применение пакета До 20 раз больше просмотров на 1 день - `x20_7` - применение пакета До 20 раз больше просмотров на 7 дней Если попытаться применить эти пакеты в недоступных для них регионе и категории, оплата не пройдёт.
 */
class PutVasPackageV2Prompt extends BasePutItemVasPackageV2Prompt
{
}
