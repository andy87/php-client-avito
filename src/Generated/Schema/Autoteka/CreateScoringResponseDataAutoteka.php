<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateScoringResponseDataAutoteka.
 */
class CreateScoringResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['scoring' => 'scoring'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['scoring' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringIdResultAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringIdResultAutoteka|null Schema field scoring */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ScoringIdResultAutoteka $scoring = null;
}
