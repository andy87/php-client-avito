<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIDependency.
 */
class APIDependency extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['action' => 'action', 'clause' => 'clause', 'pairs' => 'pairs'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['pairs' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APIDependencyPair::class]];

    /** @var string|null Что нужно сделать с полем после применения правил.
- visible означает, что поле становится доступным для заполнения.
- required означает, что поле становится обязательным. Поле до применения этого правила считается доступным для заполнения, меняется только обязательность.
- hidden означает, что поле становится недоступным для заполнения.
 */
    public ?string $action = null;

    /** @var string|null Логический оператор для определения применимости — нужно применить все правила или только одно из них. */
    public ?string $clause = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIDependencyPair>|null Список правил */
    public ?array $pairs = null;
}
