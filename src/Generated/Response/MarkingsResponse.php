<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/markings.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/markings
 */
class MarkingsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['results' => 'results'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\OrderManagement\SetOrderMarkingResponse::class;

    /** @var array<int, array<string, mixed>>|null Массив результатов обновления */
    public ?array $results = null;
}
