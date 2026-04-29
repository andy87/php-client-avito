<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\RealtyReports;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito realty-reports/ErrorMessage.
 */
class ErrorMessage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field message */
    public string $message;
}
