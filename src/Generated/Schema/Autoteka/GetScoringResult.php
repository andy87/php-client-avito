<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetScoringResult.
 */
class GetScoringResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['risksAssessment' => 'risksAssessment'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['risksAssessment' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAutoteka|null Schema field risksAssessment */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ScoringAutoteka $risksAssessment = null;
}
