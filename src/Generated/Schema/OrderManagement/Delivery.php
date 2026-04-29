<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/delivery.
 */
class Delivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyerInfo' => 'buyerInfo', 'courierInfo' => 'courierInfo', 'dispatchNumber' => 'dispatchNumber', 'serviceName' => 'serviceName', 'serviceType' => 'serviceType', 'terminalInfo' => 'terminalInfo', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['buyerInfo' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\BuyerInfo::class, 'courierInfo' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\CourierInfo::class, 'terminalInfo' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\TerminalInfo::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\BuyerInfo|null Schema field buyerInfo */
    public ?\Andy87\ClientsAvito\Generated\Schema\OrderManagement\BuyerInfo $buyerInfo = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\CourierInfo|null Schema field courierInfo */
    public ?\Andy87\ClientsAvito\Generated\Schema\OrderManagement\CourierInfo $courierInfo = null;

    /** @var string|null Номер отправления. Отсутствует для RDBS. */
    public ?string $dispatchNumber = null;

    /** @var string|null Название службы доставки. */
    public ?string $serviceName = null;

    /** @var string|null Способ доставки 
  - `pvz` - ПВЗ;
  - `dbs` - Доставка партнёрами продавца (ПВЗ);
  - `rdbs` - Доставка курьером продавца;
  - `postamat` - Доставка через постамат;
 */
    public ?string $serviceType = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\TerminalInfo|null Schema field terminalInfo */
    public ?\Andy87\ClientsAvito\Generated\Schema\OrderManagement\TerminalInfo $terminalInfo = null;

    /** @var string|null Номер для отслеживания посылки. Отсутствует для RDBS. */
    public ?string $trackingNumber = null;
}
