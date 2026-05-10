<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetPreviewResponseBodyAutoteka.
 */
class GetPreviewResponseBodyAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\GetPreviewResponseDataAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\GetPreviewResponseDataAutoteka|null Schema field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\GetPreviewResponseDataAutoteka $result = null;
}
