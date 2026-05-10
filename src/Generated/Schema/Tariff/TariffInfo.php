<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Tariff;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito tariff/TariffInfo.
 */
class TariffInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['current' => 'current', 'scheduled' => 'scheduled'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['current' => \php_client_avito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \php_client_avito\Generated\Schema\Tariff\TariffContract::class];

    /** @var \php_client_avito\Generated\Schema\Tariff\TariffContract|null Schema field current */
    public ?\php_client_avito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \php_client_avito\Generated\Schema\Tariff\TariffContract|null Schema field scheduled */
    public ?\php_client_avito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
