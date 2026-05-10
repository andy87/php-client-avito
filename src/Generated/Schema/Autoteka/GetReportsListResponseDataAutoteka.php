<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetReportsListResponseDataAutoteka.
 */
class GetReportsListResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\ReportItemAutoteka::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportItemAutoteka> Schema field result */
    public array $result;
}
