<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelItemWeight.
 */
class CreateParcelItemWeight extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['accuracy', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['accuracy' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy Schema field accuracy */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy $accuracy;

    /** @var int|null Вес в граммах. */
    public ?int $value = null;
}
