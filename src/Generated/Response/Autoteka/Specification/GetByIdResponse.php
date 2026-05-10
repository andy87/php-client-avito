<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoteka\Specification;

use php_client_avito\Generated\Response\SpecificationGetByIdResponse as BaseSpecificationGetByIdResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/specifications/specification/{specificationID}.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationGetById
 *
 * @property \php_client_avito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka|null $result Response field result
 */
class GetByIdResponse extends BaseSpecificationGetByIdResponse
{
}
