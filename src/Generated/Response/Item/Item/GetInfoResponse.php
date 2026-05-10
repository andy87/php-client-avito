<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Item\Item;

use and_y87\php_client_avito\Generated\Response\GetItemInfoResponse as BaseGetItemInfoResponse;

/**
 * Ответ Avito API [GET] /core/v1/accounts/{user_id}/items/{item_id}/.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/getItemInfo
 *
 * @property string|null $autoload_item_id [Идентификатор объявления](https://autoload.avito.ru/format/realty/#Id) из файла автозагрузки
 * @property string|null $finish_time Дата завершения объявления
 * @property string|null $start_time Дата создания объявления
 * @property string|null $status Статус объявления на сайте
 * @property string|null $url URL-адрес объявления
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Item\InfoVas>|null $vas Список примененных платных услуг
 */
class GetInfoResponse extends BaseGetItemInfoResponse
{
}
