<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelData.
 */
class CreateParcelData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcodes' => 'barcodes', 'dispatchNumber' => 'dispatchNumber', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = ['dispatchNumber', 'trackingNumber'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null Штрихкоды посылки.

Штрихкоды обязательны к возврату в случае кросс-доставки.
 */
    public ?array $barcodes = null;

    /** @var string Идентификатор посылки по версии службы доставки. */
    public string $dispatchNumber;

    /** @var string Трек-номер посылки по версии службы доставки. */
    public string $trackingNumber;
}
