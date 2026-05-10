<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CarsharingDataAutoteka.
 */
class CarsharingDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['recaps', 'events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka::class], 'recaps' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\CarsharingDataEventAutoteka> Список записей об использовании ТС в каршеринге */
    public array $events;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Поле не поддерживается. Решение о факте использования в каршеринге нужно принимать на основании данных в массиве Events */
    public array $recaps;
}
