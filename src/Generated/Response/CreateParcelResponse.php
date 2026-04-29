<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API createParcel.
 */
class CreateParcelResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelData::class, 'errorData' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelError::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelResponse::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelData|null Response field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelData $data = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelError|null Response field error */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelError $errorData = null;
}
