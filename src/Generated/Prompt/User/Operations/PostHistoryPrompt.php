<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\User\Operations;

use Andy87\ClientsAvito\Generated\Prompt\PostOperationsHistoryPrompt as BasePostOperationsHistoryPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/operations_history/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/user/documentation#operation/postOperationsHistory
 * 
 * @property string $dateTimeFrom Время выборки от. Не далее одного года в прошлое от текущего момента.
 * @property string $dateTimeTo Время выборки до (диапазон между dateTimeFrom и dateTimeTo должен быть не более одной недели)
 */
class PostHistoryPrompt extends BasePostOperationsHistoryPrompt
{
}
