<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetInfoByOrderIdErrorReply.
 */
class GetInfoByOrderIdErrorReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['message', 'code'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Код ошибки */
    public int $code;

    /** @var string Сообщение об ошибке */
    public string $message;

    /** @var string|null Название ошибки */
    public ?string $name = null;
}
