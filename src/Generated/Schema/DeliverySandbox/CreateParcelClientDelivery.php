<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDelivery.
 */
class CreateParcelClientDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['completenessAndIntegrity' => 'completenessAndIntegrity', 'courier' => 'courier', 'secondPartyLogist' => 'secondPartyLogist', 'sortingCenter' => 'sortingCenter', 'terminal' => 'terminal', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['courier' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier::class, 'secondPartyLogist' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist::class, 'sortingCenter' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter::class, 'terminal' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal::class];

    /** @var array<int, string>|null Где осуществляется проверка целостности и комплектности вложений посылки.
 */
    public ?array $completenessAndIntegrity = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier|null Schema field courier */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourier $courier = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist|null Schema field secondPartyLogist */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySecondPartyLogist $secondPartyLogist = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter|null Schema field sortingCenter */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliverySortingCenter $sortingCenter = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal|null Schema field terminal */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryTerminal $terminal = null;

    /** @var string Тип доставки.

- `TERMINAL` – в пункт выдачи заказов.
- `SORTING_CENTER` – в сортировочный центр (для кросс-доставки).
- `COURIER` - доставка курьером.
 */
    public string $type;
}
