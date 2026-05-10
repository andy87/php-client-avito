<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
