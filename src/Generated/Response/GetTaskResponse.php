<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API GetTask.
 */
class GetTaskResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetTaskData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetTaskReply::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetTaskData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetTaskData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError $errorData = null;
}
