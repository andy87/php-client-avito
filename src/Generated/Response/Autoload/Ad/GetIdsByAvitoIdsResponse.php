<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Ad;

use Andy87\ClientsAvito\Generated\Response\GetAdIdsByAvitoIdsResponse as BaseGetAdIdsByAvitoIdsResponse;

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
