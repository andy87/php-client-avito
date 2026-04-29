<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/CommonError.
 */
class CommonError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['details' => 'details', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = ['details'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Информация об ошибках в привязке к полям */
    public ?array $details = null;

    /** @var string Сообщение об ошибке */
    public string $message;
}
