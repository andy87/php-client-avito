<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ServiceV1.
 */
class ServiceV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['endDate' => 'endDate', 'name' => 'name', 'slug' => 'slug', 'startDate' => 'startDate'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Дата и время завершения продвижения */
    public ?string $endDate = null;

    /** @var string|null Наименование услуги */
    public ?string $name = null;

    /** @var string|null Тип услуги */
    public ?string $slug = null;

    /** @var string|null Дата и время начала продвижения */
    public ?string $startDate = null;
}
