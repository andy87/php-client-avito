<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Calls;

use Andy87\ClientsAvito\Generated\Prompt\GetCallsByTimeV2Prompt as BaseGetCallsByTimeV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/callsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 * 
 * @property string $dateTimeFrom Время с которого нужно начинать поиск звонков по startTime (строка в формате RFC3339)
 * @property int $limit Размер выборки
 * @property int|null $offset Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный startTime звонка из предыдущей выборки
 */
class GetByTimeV2Prompt extends BaseGetCallsByTimeV2Prompt
{
}
