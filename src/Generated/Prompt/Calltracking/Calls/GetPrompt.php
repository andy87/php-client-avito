<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Calltracking\Calls;

use Andy87\ClientsAvito\Generated\Prompt\GetCallsPrompt as BaseGetCallsPrompt;

/**
 * Класс данных запроса Avito API [POST] /calltracking/v1/getCalls/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/calltracking/documentation#operation/get_calls
 * 
 * @property string $dateTimeFrom Время с которого нужно начинать поиск звонков по callTime (строка в формате RFC3339)
 * @property string|null $dateTimeTo Время до которого нужно искать заонки по callTime (строка в формате RFC3339). Если не указано, используется dateTimeFrom + 1 месяц. Максимально возможное значение - dateTimeFrom + 3 месяца.
 * @property int $limit Размер выборки
 * @property int $offset Смещение выборки
 */
class GetPrompt extends BaseGetCallsPrompt
{
}
