<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Cpa\Chats;

use and_y87\php_client_avito\Generated\Prompt\ChatsByTimePrompt as BaseChatsByTimePrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/chatsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property string $dateTimeFrom Время с которого нужно начинать поиск чатов по date (строка в формате RFC3339)
 * @property int $limit Размер выборки (значение в поле должно быть не более 100)
 * @property int $offset Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный startTime чата из предыдущей выборки
 */
class ByTimePrompt extends BaseChatsByTimePrompt
{
}
