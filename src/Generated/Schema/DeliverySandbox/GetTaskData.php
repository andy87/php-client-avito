<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetTaskData.
 */
class GetTaskData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'result' => 'result', 'state' => 'state', 'taskId' => 'taskId'];

    protected const REQUIRED_FIELDS = ['taskId', 'state'];

    protected const NULLABLE_FIELDS = ['errors', 'result'];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError>|null Schema field errors */
    public ?array $errors = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AreasTaskResult|null Schema field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AreasTaskResult $result = null;

    /** @var string Статус задачи */
    public string $state;

    /** @var int Schema field taskId */
    public int $taskId;
}
