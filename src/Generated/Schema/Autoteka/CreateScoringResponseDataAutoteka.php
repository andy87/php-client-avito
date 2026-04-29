<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateScoringResponseDataAutoteka.
 */
class CreateScoringResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['scoring' => 'scoring'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['scoring' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringIdResultAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringIdResultAutoteka|null Schema field scoring */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringIdResultAutoteka $scoring = null;
}
