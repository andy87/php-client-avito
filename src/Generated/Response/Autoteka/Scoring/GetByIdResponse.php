<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoteka\Scoring;

use php_client_avito\Generated\Response\ScoringGetByIdResponse as BaseScoringGetByIdResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/scoring/{scoring_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringGetById
 *
 * @property \php_client_avito\Generated\Schema\Autoteka\GetScoringResult|null $result Response field result
 */
class GetByIdResponse extends BaseScoringGetByIdResponse
{
}
