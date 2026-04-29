<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringIdResultAutoteka.
 */
class ScoringIdResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['scoringId' => 'scoringId'];

    protected const REQUIRED_FIELDS = ['scoringId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор скоринга, по которому его можно получить */
    public int $scoringId;
}
