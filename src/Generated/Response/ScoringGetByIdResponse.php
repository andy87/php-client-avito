<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/scoring/{scoring_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringGetById
 */
class ScoringGetByIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetScoringResult::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetScoring::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetScoringResult|null Response field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\GetScoringResult $result = null;
}
