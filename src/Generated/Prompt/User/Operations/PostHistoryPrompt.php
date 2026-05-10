<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\User\Operations;

use and_y87\php_client_avito\Generated\Prompt\PostOperationsHistoryPrompt as BasePostOperationsHistoryPrompt;

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
