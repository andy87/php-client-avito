<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoload\Ad;

use Andy87\ClientsAvito\Generated\Prompt\GetAdIdsByAvitoIdsPrompt as BaseGetAdIdsByAvitoIdsPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/items/ad_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getAdIdsByAvitoIds
 * 
 * @property string $query Список ID объявлений. Формат значения: строка с идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 * @property string $Authorization Токен для авторизации
 */
class GetIdsByAvitoIdsPrompt extends BaseGetAdIdsByAvitoIdsPrompt
{
}
