<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateTeaserResponseDataAutoteka.
 */
class CreateTeaserResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['teaser' => 'teaser'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['teaser' => \and_y87\php_client_avito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka|null Schema field teaser */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka $teaser = null;
}
