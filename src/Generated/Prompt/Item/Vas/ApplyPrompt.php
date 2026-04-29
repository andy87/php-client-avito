<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Vas;

use Andy87\ClientsAvito\Generated\Prompt\ApplyVasPrompt as BaseApplyVasPrompt;

/**
 * Класс данных запроса Avito API [PUT] /core/v2/items/{itemId}/vas/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/applyVas
 * 
 * @property array<int, string> $slugs Список идентификаторов услуг
 * @property array<int, int>|null $stickers Список значков
 */
class ApplyPrompt extends BaseApplyVasPrompt
{
}
