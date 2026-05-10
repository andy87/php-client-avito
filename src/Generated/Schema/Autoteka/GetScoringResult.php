<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetScoringResult.
 */
class GetScoringResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['risksAssessment' => 'risksAssessment'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['risksAssessment' => \php_client_avito\Generated\Schema\Autoteka\ScoringAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\ScoringAutoteka|null Schema field risksAssessment */
    public ?\php_client_avito\Generated\Schema\Autoteka\ScoringAutoteka $risksAssessment = null;
}
