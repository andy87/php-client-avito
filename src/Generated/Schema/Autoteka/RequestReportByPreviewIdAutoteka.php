<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
