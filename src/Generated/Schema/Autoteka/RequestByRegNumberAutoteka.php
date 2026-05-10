<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestByRegNumberAutoteka.
 */
class RequestByRegNumberAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['regNumber' => 'regNumber'];

    protected const REQUIRED_FIELDS = ['regNumber'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string государственный номер запрашиваемого авто. */
    public string $regNumber;
}
