<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API ChangeParcels.
 */
class ChangeParcelsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsResponse::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsError $errorData = null;
}
