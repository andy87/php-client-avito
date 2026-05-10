<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/InsurancePoliciesAutoteka.
 */
class InsurancePoliciesAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['events', 'recaps'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka::class], 'recaps' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka> Список действующих полисов ОСАГО */
    public array $events;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;
}
