<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateTeaserResponseDataAutoteka.
 */
class CreateTeaserResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['teaser' => 'teaser'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['teaser' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka|null Schema field teaser */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\TeaserWithoutDataAutoteka $teaser = null;
}
