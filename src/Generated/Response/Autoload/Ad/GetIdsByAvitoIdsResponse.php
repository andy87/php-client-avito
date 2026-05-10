<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoload\Ad;

use and_y87\php_client_avito\Generated\Response\GetAdIdsByAvitoIdsResponse as BaseGetAdIdsByAvitoIdsResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/items/ad_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAdIdsByAvitoIds
 *
 * @property array<int, array<string, mixed>> $items Список связанных идентификаторов (ID) объявлений из файла с идентификаторами (ID) на Авито
 */
class GetIdsByAvitoIdsResponse extends BaseGetAdIdsByAvitoIdsResponse
{
}
