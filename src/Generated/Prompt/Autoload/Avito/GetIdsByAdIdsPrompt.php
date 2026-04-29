<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoload\Avito;

use Andy87\ClientsAvito\Generated\Prompt\GetAvitoIdsByAdIdsPrompt as BaseGetAvitoIdsByAdIdsPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/items/avito_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAvitoIdsByAdIds
 * 
 * @property string $query Список ID объявлений. Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id), перечисленными через «,» или «|»
 * @property string $Authorization Токен для авторизации
 */
class GetIdsByAdIdsPrompt extends BaseGetAvitoIdsByAdIdsPrompt
{
}
