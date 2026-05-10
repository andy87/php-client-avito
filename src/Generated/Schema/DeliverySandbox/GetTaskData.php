<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetTaskData.
 */
class GetTaskData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'result' => 'result', 'state' => 'state', 'taskId' => 'taskId'];

    protected const REQUIRED_FIELDS = ['taskId', 'state'];

    protected const NULLABLE_FIELDS = ['errors', 'result'];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError>|null Schema field errors */
    public ?array $errors = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\AreasTaskResult|null Schema field result */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\AreasTaskResult $result = null;

    /** @var string Статус задачи */
    public string $state;

    /** @var int Schema field taskId */
    public int $taskId;
}
