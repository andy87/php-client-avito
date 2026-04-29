<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringAutoteka.
 */
class ScoringAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'data' => 'data', 'isCompleted' => 'isCompleted', 'scoringId' => 'scoringId'];

    protected const REQUIRED_FIELDS = ['scoringId', 'isCompleted', 'createdAt'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringDataAutoteka::class];

    /** @var int Дата формирования отчета */
    public int $createdAt;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringDataAutoteka|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringDataAutoteka $data = null;

    /** @var bool Признак, что формирование всех блоков скоринга завершено */
    public bool $isCompleted;

    /** @var int Идентификатор скоринга, по которому его можно получить */
    public int $scoringId;
}
