<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Task;

use php_client_avito\Generated\Response\GetTaskResponse as BaseGetTaskResponse;

/**
 * Ответ Avito API [GET] /delivery-sandbox/tasks/{task_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetTask
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class GetResponse extends BaseGetTaskResponse
{
}
