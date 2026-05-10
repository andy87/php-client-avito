<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringAutoteka.
 */
class ScoringAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'data' => 'data', 'isCompleted' => 'isCompleted', 'scoringId' => 'scoringId'];

    protected const REQUIRED_FIELDS = ['scoringId', 'isCompleted', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\Autoteka\ScoringDataAutoteka::class];

    /** @var int Дата формирования отчета */
    public int $createdAt;

    /** @var \php_client_avito\Generated\Schema\Autoteka\ScoringDataAutoteka|null Schema field data */
    public ?\php_client_avito\Generated\Schema\Autoteka\ScoringDataAutoteka $data = null;

    /** @var bool Признак, что формирование всех блоков скоринга завершено */
    public bool $isCompleted;

    /** @var int Идентификатор скоринга, по которому его можно получить */
    public int $scoringId;
}
