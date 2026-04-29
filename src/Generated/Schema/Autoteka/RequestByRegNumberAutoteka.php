<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
