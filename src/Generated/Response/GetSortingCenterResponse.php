<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API GetSortingCenter.
 */
class GetSortingCenterResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['data' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterGetData::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterGet::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterGetData>|null Response field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Response field error */
    public ?array $errorData = null;
}
