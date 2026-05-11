<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData::class, 'errorData' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskReply::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData|null Response field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
