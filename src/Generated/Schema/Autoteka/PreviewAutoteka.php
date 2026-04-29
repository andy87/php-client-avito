<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PreviewAutoteka.
 */
class PreviewAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'previewId' => 'previewId', 'regNumber' => 'regNumber', 'status' => 'status', 'vin' => 'vin'];

    protected const REQUIRED_FIELDS = ['previewId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewDataAutoteka|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewDataAutoteka $data = null;

    /** @var int Id возвращаемый в методе /v1/request-preview/ */
    public int $previewId;

    /** @var string|null Государственный номер запрашиваемого авто */
    public ?string $regNumber = null;

    /** @var string|null текущий статус готовности превью */
    public ?string $status = null;

    /** @var string|null VIN номер запрашиваемого авто */
    public ?string $vin = null;
}
