<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Item\Item;

use php_client_avito\Generated\Response\PutItemVasResponse as BasePutItemVasResponse;

/**
 * Ответ Avito API [PUT] /core/v1/accounts/{user_id}/items/{item_id}/vas.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVas
 *
 * @property float|null $amount Сумма списания за применение услуги
 * @property \php_client_avito\Generated\Schema\Item\InfoVas|null $vas Response field vas
 */
class PutVasResponse extends BasePutItemVasResponse
{
}
