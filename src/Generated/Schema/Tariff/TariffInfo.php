<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Tariff;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito tariff/TariffInfo.
 */
class TariffInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['current' => 'current', 'scheduled' => 'scheduled'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['current' => \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract::class, 'scheduled' => \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract|null Schema field current */
    public ?\and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract $current = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract|null Schema field scheduled */
    public ?\and_y87\php_client_avito\Generated\Schema\Tariff\TariffContract $scheduled = null;
}
