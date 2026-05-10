<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/VasApplyAvito.
 */
class VasApplyAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vas' => \php_client_avito\Generated\Schema\Item\InfoVas::class];

    /** @var float|null Сумма списания за применение услуги */
    public ?float $amount = null;

    /** @var \php_client_avito\Generated\Schema\Item\InfoVas|null Schema field vas */
    public ?\php_client_avito\Generated\Schema\Item\InfoVas $vas = null;
}
