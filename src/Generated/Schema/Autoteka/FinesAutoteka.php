<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/FinesAutoteka.
 */
class FinesAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['recaps', 'events'];

    protected const NULLABLE_FIELDS = ['requestTime'];

    protected const CASTS = ['events' => [\php_client_avito\Generated\Schema\Autoteka\FineEventAutoteka::class], 'recaps' => [\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\FineEventAutoteka> Список штрафов */
    public array $events;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var int|null Дата запроса к источнику UnixTime */
    public ?int $requestTime = null;
}
