<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/InsurancePoliciesAutoteka.
 */
class InsurancePoliciesAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['events', 'recaps'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\php_client_avito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka::class], 'recaps' => [\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka> Список действующих полисов ОСАГО */
    public array $events;

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;
}
