<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/scoring/by-vehicle-id.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/scoringByVehicleId
 */
class ScoringByVehicleIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\CreateScoringResponseBodyAutoteka::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka $result = null;
}
