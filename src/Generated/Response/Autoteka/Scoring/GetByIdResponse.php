<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoteka\Scoring;

use Andy87\ClientsAvito\Generated\Response\ScoringGetByIdResponse as BaseScoringGetByIdResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/scoring/{scoring_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringGetById
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetScoringResult|null $result Response field result
 */
class GetByIdResponse extends BaseScoringGetByIdResponse
{
}
