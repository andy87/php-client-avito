<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoload\Avito;

use php_client_avito\Generated\Prompt\GetAvitoIdsByAdIdsPrompt as BaseGetAvitoIdsByAdIdsPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/items/avito_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAvitoIdsByAdIds
 *
 * @property string $query Список ID объявлений. Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id), перечисленными через «,» или «|»
 */
class GetIdsByAdIdsPrompt extends BaseGetAvitoIdsByAdIdsPrompt
{
}
