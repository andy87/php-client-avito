<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /delivery-sandbox/tasks/{task_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetTask
 */
class GetTaskResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData::class, 'errorData' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskReply::class;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData|null Response field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
