<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDelivery.
 */
class CreateParcelClientDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['completenessAndIntegrity' => 'completenessAndIntegrity', 'courier' => 'courier', 'secondPartyLogist' => 'secondPartyLogist', 'sortingCenter' => 'sortingCenter', 'terminal' => 'terminal', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['courier' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier::class, 'secondPartyLogist' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist::class, 'sortingCenter' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter::class, 'terminal' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal::class];

    /** @var array<int, string>|null Где осуществляется проверка целостности и комплектности вложений посылки.
 */
    public ?array $completenessAndIntegrity = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier|null Schema field courier */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier $courier = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist|null Schema field secondPartyLogist */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist $secondPartyLogist = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter|null Schema field sortingCenter */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter $sortingCenter = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal|null Schema field terminal */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal $terminal = null;

    /** @var string Тип доставки.

- `TERMINAL` – в пункт выдачи заказов.
- `SORTING_CENTER` – в сортировочный центр (для кросс-доставки).
- `COURIER` - доставка курьером.
 */
    public string $type;
}
