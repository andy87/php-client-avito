<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoteka\Specification;

use Andy87\ClientsAvito\Generated\Response\SpecificationGetByIdResponse as BaseSpecificationGetByIdResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/specifications/specification/{specificationID}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/specificationGetById
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka|null $result Response field result
 */
class GetByIdResponse extends BaseSpecificationGetByIdResponse
{
}
