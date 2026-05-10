<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /realty/v1/items/intervals.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putIntervals
 */
class PutIntervalsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var string|null Результат обработки запроса */
    public ?string $result = null;
}
