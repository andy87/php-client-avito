<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/TariffTaskResult.
 */
class TariffTaskResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['tariffId' => 'tariffId'];

    protected const REQUIRED_FIELDS = ['tariffId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string id добавленного тарифа */
    public string $tariffId;
}
