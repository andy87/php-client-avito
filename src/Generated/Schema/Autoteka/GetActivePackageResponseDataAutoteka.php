<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetActivePackageResponseDataAutoteka.
 */
class GetActivePackageResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['package' => 'package'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['package' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PackageAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PackageAutoteka|null Schema field package */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\PackageAutoteka $package = null;
}
