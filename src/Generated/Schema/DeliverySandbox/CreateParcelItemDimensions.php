<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItemDimensions.
 */
class CreateParcelItemDimensions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['accuracy', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['accuracy' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy Schema field accuracy */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy $accuracy;

    /** @var array<int, int> Габариты в сантиметрах.

В порядке: длина, высота, ширина.
 */
    public array $values;
}
