<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Sorting;

use php_client_avito\Generated\Response\GetSortingCenterResponse as BaseGetSortingCenterResponse;

/**
 * Ответ Avito API [GET] /delivery-sandbox/sorting-center.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetSortingCenter
 *
 * @property array<int, \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGetData>|null $data Response field data
 * @property array<string, mixed>|null $errorData Response field error
 */
class GetCenterResponse extends BaseGetSortingCenterResponse
{
}
