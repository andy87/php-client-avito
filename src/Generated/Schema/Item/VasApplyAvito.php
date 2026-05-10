<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/VasApplyAvito.
 */
class VasApplyAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vas' => \and_y87\php_client_avito\Generated\Schema\Item\InfoVas::class];

    /** @var float|null Сумма списания за применение услуги */
    public ?float $amount = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\InfoVas|null Schema field vas */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\InfoVas $vas = null;
}
