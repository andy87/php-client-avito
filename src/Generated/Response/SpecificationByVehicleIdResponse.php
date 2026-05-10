<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autoteka/v1/specifications/by-vehicle-id.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationByVehicleId
 */
class SpecificationByVehicleIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseBodyAutoteka::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\CreateSpecificationResponseDataAutoteka $result = null;
}
