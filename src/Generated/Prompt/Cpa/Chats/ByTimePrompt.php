<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Chats;

use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimePrompt as BaseChatsByTimePrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/chatsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 * 
 * @property string $dateTimeFrom Время с которого нужно начинать поиск чатов по date (строка в формате RFC3339)
 * @property int $limit Размер выборки (значение в поле должно быть не более 100)
 * @property int $offset Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный startTime чата из предыдущей выборки
 */
class ByTimePrompt extends BaseChatsByTimePrompt
{
}
