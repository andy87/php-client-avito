<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/VasApplyAvito.
 */
class VasApplyAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['amount' => 'amount', 'vas' => 'vas'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vas' => \Andy87\ClientsAvito\Generated\Schema\Item\InfoVas::class];

    /** @var float|null Сумма списания за применение услуги */
    public ?float $amount = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\InfoVas|null Schema field vas */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\InfoVas $vas = null;
}
