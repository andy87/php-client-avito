<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetEptsResult.
 */
class GetEptsResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['epts' => 'epts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['epts' => \php_client_avito\Generated\Schema\Autoteka\EptsAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\EptsAutoteka|null Schema field epts */
    public ?\php_client_avito\Generated\Schema\Autoteka\EptsAutoteka $epts = null;
}
