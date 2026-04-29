<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItemDimensions.
 */
class CreateParcelItemDimensions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['accuracy', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['accuracy' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy Schema field accuracy */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy $accuracy;

    /** @var array<int, int> Габариты в сантиметрах.

В порядке: длина, высота, ширина.
 */
    public array $values;
}
