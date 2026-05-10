<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetActivePackageResponseDataAutoteka.
 */
class GetActivePackageResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['package' => 'package'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['package' => \and_y87\php_client_avito\Generated\Schema\Autoteka\PackageAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\PackageAutoteka|null Schema field package */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\PackageAutoteka $package = null;
}
