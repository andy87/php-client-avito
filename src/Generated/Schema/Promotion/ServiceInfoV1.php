<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ServiceInfoV1.
 */
class ServiceInfoV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isDeprecated' => 'isDeprecated', 'name' => 'name', 'slug' => 'slug'];

    protected const REQUIRED_FIELDS = ['slug', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Признак, что тип услуги устарел и более недоступен для подключения */
    public ?bool $isDeprecated = null;

    /** @var string Наименование типа услуги */
    public string $name;

    /** @var string Идентификатор типа услуги */
    public string $slug;
}
