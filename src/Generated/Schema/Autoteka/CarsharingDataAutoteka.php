<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CarsharingDataAutoteka.
 */
class CarsharingDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['recaps', 'events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\php_client_avito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka::class], 'recaps' => [\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka> Список записей об использовании ТС в каршеринге */
    public array $events;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Поле не поддерживается. Решение о факте использования в каршеринге нужно принимать на основании данных в массиве Events */
    public array $recaps;
}
