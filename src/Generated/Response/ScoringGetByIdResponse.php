<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['result' => \and_y87\php_client_avito\Generated\Schema\Autoteka\GetScoringResult::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\GetScoring::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\GetScoringResult|null Response field result */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\GetScoringResult $result = null;
}
