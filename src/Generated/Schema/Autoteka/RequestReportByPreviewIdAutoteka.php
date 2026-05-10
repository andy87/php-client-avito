<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestReportByPreviewIdAutoteka.
 */
class RequestReportByPreviewIdAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['previewId' => 'previewId'];

    protected const REQUIRED_FIELDS = ['previewId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор превью. */
    public int $previewId;
}
