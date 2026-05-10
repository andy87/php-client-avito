<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\GetScoringResult::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\GetScoring::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\GetScoringResult|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\GetScoringResult $result = null;
}
