<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoload\Autoload;

use php_client_avito\Generated\Prompt\GetAutoloadItemsInfoV2Prompt as BaseGetAutoloadItemsInfoV2Prompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAutoloadItemsInfoV2
 *
 * @property string $query Идентификаторы объявлений из файла ([параметр Id](https://autoload.avito.ru/format/realty/#Id)). Формат значения: строка, содержащая от 1 до 100 идентификаторов, перечисленных через «,» или «|».
 */
class GetItemsInfoV2Prompt extends BaseGetAutoloadItemsInfoV2Prompt
{
}
