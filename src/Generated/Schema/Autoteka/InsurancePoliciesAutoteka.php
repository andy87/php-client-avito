<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/InsurancePoliciesAutoteka.
 */
class InsurancePoliciesAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps'];

    protected const REQUIRED_FIELDS = ['events', 'recaps'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka::class], 'recaps' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\InsurancePolicyEventAutoteka> Список действующих полисов ОСАГО */
    public array $events;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;
}
