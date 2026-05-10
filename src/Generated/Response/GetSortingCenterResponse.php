<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /delivery-sandbox/sorting-center.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/GetSortingCenter
 */
class GetSortingCenterResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['data' => [\php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGetData::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGet::class;

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGetData>|null Response field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Response field error */
    public ?array $errorData = null;
}
