<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetPreviewResponseDataAutoteka.
 */
class GetPreviewResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['preview' => 'preview'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['preview' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewAutoteka|null Schema field preview */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\PreviewAutoteka $preview = null;
}
