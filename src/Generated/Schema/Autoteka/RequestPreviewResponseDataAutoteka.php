<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestPreviewResponseDataAutoteka.
 */
class RequestPreviewResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['preview' => 'preview'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['preview' => \php_client_avito\Generated\Schema\Autoteka\PreviewIdOnlyAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\PreviewIdOnlyAutoteka|null Schema field preview */
    public ?\php_client_avito\Generated\Schema\Autoteka\PreviewIdOnlyAutoteka $preview = null;
}
