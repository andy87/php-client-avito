<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\OrderManagement;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/delivery.
 */
class Delivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyerInfo' => 'buyerInfo', 'courierInfo' => 'courierInfo', 'dispatchNumber' => 'dispatchNumber', 'serviceName' => 'serviceName', 'serviceType' => 'serviceType', 'terminalInfo' => 'terminalInfo', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['buyerInfo' => \php_client_avito\Generated\Schema\OrderManagement\BuyerInfo::class, 'courierInfo' => \php_client_avito\Generated\Schema\OrderManagement\CourierInfo::class, 'terminalInfo' => \php_client_avito\Generated\Schema\OrderManagement\TerminalInfo::class];

    /** @var \php_client_avito\Generated\Schema\OrderManagement\BuyerInfo|null Schema field buyerInfo */
    public ?\php_client_avito\Generated\Schema\OrderManagement\BuyerInfo $buyerInfo = null;

    /** @var \php_client_avito\Generated\Schema\OrderManagement\CourierInfo|null Schema field courierInfo */
    public ?\php_client_avito\Generated\Schema\OrderManagement\CourierInfo $courierInfo = null;

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

    /** @var \php_client_avito\Generated\Schema\OrderManagement\TerminalInfo|null Schema field terminalInfo */
    public ?\php_client_avito\Generated\Schema\OrderManagement\TerminalInfo $terminalInfo = null;

    /** @var string|null Номер для отслеживания посылки. Отсутствует для RDBS. */
    public ?string $trackingNumber = null;
}
