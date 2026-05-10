<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetSandboxParcelInfoRequest.
 */
class GetSandboxParcelInfoRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field parcelID */
    public string $parcelID;
}
