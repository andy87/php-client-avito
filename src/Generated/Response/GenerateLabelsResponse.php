<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API generateLabels.
 */
class GenerateLabelsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['taskID' => 'taskID'];

    protected const REQUIRED_FIELDS = ['taskID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrdersLabelsResponse::class;

    /** @var string ID задачи (документа) */
    public string $taskID;
}
