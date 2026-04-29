<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\RealtyReports;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito realty-reports/Error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'isTemporary' => 'isTemporary', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = ['isTemporary'];

    protected const CASTS = [];

    /** @var int Код ошибки */
    public int $code;

    /** @var bool|null Признак того, что ошибка временная (можно попробовать повторить запрос через некоторое время) */
    public ?bool $isTemporary = null;

    /** @var string Сообщение */
    public string $message;
}
