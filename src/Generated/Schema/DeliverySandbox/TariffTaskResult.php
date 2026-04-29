<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
