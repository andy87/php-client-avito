<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CarsharingDataAutoteka.
 */
class CarsharingDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['recaps', 'events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka::class], 'recaps' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka> Список записей об использовании ТС в каршеринге */
    public array $events;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka> Поле не поддерживается. Решение о факте использования в каршеринге нужно принимать на основании данных в массиве Events */
    public array $recaps;
}
