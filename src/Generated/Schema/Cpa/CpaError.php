<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CpaError.
 */
class CpaError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Внутренний код ошибки

Возможные значения:
- 1000 - пустой запрос
- 1001 - ошибка валидации
- 1002 - ошибка авторизации
- 1003 - внутренняя ошибка
- 1004 - не найдено
 */
    public ?int $code = null;

    /** @var string|null Текст ошибки */
    public ?string $message = null;
}
