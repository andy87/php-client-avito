<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APFieldsNodeAlert.
 */
class APFieldsNodeAlert extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'title' => 'title', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание предупреждения */
    public ?string $description = null;

    /** @var string|null Заголовок предупреждения */
    public ?string $title = null;

    /** @var string|null Тип предупреждения */
    public ?string $type = null;
}
