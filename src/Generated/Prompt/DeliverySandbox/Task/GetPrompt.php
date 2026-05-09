<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Task;

use Andy87\ClientsAvito\Generated\Prompt\GetTaskPrompt as BaseGetTaskPrompt;

/**
 * Класс данных запроса Avito API [GET] /delivery-sandbox/tasks/{task_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetTask
 *
 * @property int $task_id path-parameter task_id
 */
class GetPrompt extends BaseGetTaskPrompt
{
}
