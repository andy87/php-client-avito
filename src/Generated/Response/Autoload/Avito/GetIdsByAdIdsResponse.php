<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoload\Avito;

use php_client_avito\Generated\Response\GetAvitoIdsByAdIdsResponse as BaseGetAvitoIdsByAdIdsResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/items/avito_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAvitoIdsByAdIds
 *
 * @property array<int, array<string, mixed>> $items Список связанных идентификаторов (ID) объявлений из файла с идентификаторами (ID) на Авито
 */
class GetIdsByAdIdsResponse extends BaseGetAvitoIdsByAdIdsResponse
{
}
