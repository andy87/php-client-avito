<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Tariff;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito tariff/TariffInfo.
 */
class TariffInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['current' => 'current', 'scheduled' => 'scheduled'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['current' => \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null Schema field current */
    public ?\Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract|null Schema field scheduled */
    public ?\Andy87\ClientsAvito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
