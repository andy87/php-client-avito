<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetEptsResult.
 */
class GetEptsResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['epts' => 'epts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['epts' => \and_y87\php_client_avito\Generated\Schema\Autoteka\EptsAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\EptsAutoteka|null Schema field epts */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\EptsAutoteka $epts = null;
}
