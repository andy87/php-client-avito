<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ErrorByItemV1.
 */
class ErrorByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errorCode' => 'errorCode', 'errorText' => 'errorText', 'itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId', 'errorCode', 'errorText'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Код ошибки */
    public int $errorCode;

    /** @var string Текст ошибки */
    public string $errorText;

    /** @var int Идентификатор объявления */
    public int $itemId;
}
