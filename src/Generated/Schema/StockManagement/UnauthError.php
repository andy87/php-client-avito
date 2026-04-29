<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\StockManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito stock-management/unauthError.
 */
class UnauthError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Сообщение о том, что пользователь не авторизован. Если текст ошибки "Unsupported flow for endpoint", значит в авторизационном заголовке "X-Oauth-Flow" не передан "authorization_code" */
    public string $message;
}
