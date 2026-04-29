<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetChangeParcelInfoRequest.
 */
class GetChangeParcelInfoRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applicationID' => 'applicationID'];

    protected const REQUIRED_FIELDS = ['applicationID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field applicationID */
    public string $applicationID;
}
