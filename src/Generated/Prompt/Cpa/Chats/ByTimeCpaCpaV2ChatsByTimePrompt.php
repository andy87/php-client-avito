<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Chats;

use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimeCpaCpaV2ChatsByTimePrompt as BaseChatsByTimeCpaCpaV2ChatsByTimePrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/chatsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 * 
 * @property string $dateTimeFrom Время с которого нужно начинать поиск чатов по date (строка в формате RFC3339)
 * @property int $limit Размер выборки (значение в поле должно быть не более 100)
 * @property int $offset Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный date чата из предыдущей выборки
 */
class ByTimeCpaCpaV2ChatsByTimePrompt extends BaseChatsByTimeCpaCpaV2ChatsByTimePrompt
{
}
