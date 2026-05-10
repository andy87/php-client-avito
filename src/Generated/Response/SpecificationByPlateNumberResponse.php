<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/specifications/by-plate-number.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationByPlateNumber
 */
class SpecificationByPlateNumberResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \and_y87\php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka::class];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseBodyAutoteka::class;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka|null Response field result */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka $result = null;
}
