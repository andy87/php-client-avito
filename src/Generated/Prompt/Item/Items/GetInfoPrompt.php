<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Item\Items;

use and_y87\php_client_avito\Generated\Prompt\GetItemsInfoPrompt as BaseGetItemsInfoPrompt;

/**
 * Класс данных запроса Avito API [GET] /core/v1/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemsInfo
 *
 * @property int|null $per_page Количество записей на странице (целое число больше 0 и меньше 100)
 * @property int|null $page Номер страницы (целое число больше 0)
 * @property string|null $status Статус объявления на сайте (можно указать несколько значений через запятую)
 * @property string|null $updatedAtFrom Фильтр больше либо равно по дате обновления/редактирования объявления в формате YYYY-MM-DD
 * @property int|null $category Идентификатор категории объявления</br> см. возможные варианты категорий в [ справочнике ](https://www.avito.st/s/openapi/catalog-categories.xml)
 */
class GetInfoPrompt extends BaseGetItemsInfoPrompt
{
}
