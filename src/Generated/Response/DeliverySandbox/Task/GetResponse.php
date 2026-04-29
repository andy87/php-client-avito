<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Task;

use Andy87\ClientsAvito\Generated\Response\GetTaskResponse as BaseGetTaskResponse;

/**
 * Ответ Avito API [GET] /delivery-sandbox/tasks/{task_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetTask
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetTaskData|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class GetResponse extends BaseGetTaskResponse
{
}
