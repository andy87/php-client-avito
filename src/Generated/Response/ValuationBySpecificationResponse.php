<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/valuation/by-specification.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/valuationBySpecification
 */
class ValuationBySpecificationResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ValuationBySpecificationResultAutoteka::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\ValuationBySpecificationResponseBodyAutoteka::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ValuationBySpecificationResultAutoteka|null Response field result */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ValuationBySpecificationResultAutoteka $result = null;
}
