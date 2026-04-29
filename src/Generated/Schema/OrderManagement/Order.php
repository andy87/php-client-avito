<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/order.
 */
class Order extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['availableActions' => 'availableActions', 'createdAt' => 'createdAt', 'delivery' => 'delivery', 'id' => 'id', 'items' => 'items', 'marketplaceId' => 'marketplaceId', 'prices' => 'prices', 'returnPolicy' => 'returnPolicy', 'schedules' => 'schedules', 'status' => 'status', 'updatedAt' => 'updatedAt'];

    protected const REQUIRED_FIELDS = ['id', 'createdAt', 'updatedAt', 'items', 'prices', 'status', 'delivery', 'schedules'];

    protected const NULLABLE_FIELDS = ['availableActions', 'marketplaceId'];

    protected const CASTS = ['availableActions' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Action::class], 'delivery' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Delivery::class, 'items' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Item::class], 'prices' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderPrices::class, 'returnPolicy' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\ReturnPolicy::class, 'schedules' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Schedules::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Action>|null Массив действий доступных по заказу. Действие с флагом required необходимо выполнить для движения заказа. В случае, когда действия от продавца не требуются, массив будет пустой.

  * `confirm` - подтверждение заказа;
  * `perform` - подтверждение отправки заказа (RDBS);
  * `receive` - подтверждение доставки заказа (RDBS, CNC);
  * `reject` - отмена заказа;
  * `setMarkings` - передача кодов маркировки системы "Честный знак";
  * `setTrackNumber` - передача трек-номера посылки для доставки партнёрами продавца (DBS);
  * `fixTrackNumber` - исправление трек-номера посылки, в случае, если трек-номер не прошёл проверку (DBS);
  * `getCourierDeliveryRange` - получение доступных временных интервалов приезда курьера (Courier);
  * `setCourierDeliveryRange` - выбор места и времени приезда курьера (Courier);
  * `acceptReturnOrder` - подтверждение возврата и выбор отделения Почты, куда приедет возврат (Courier).
  * `setCNCDetails` - подготовка заказаза и уточнение деталей (CNC).
 */
    public ?array $availableActions = null;

    /** @var string Дата и время создания заказа */
    public string $createdAt;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Delivery Schema field delivery */
    public \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Delivery $delivery;

    /** @var string Номер заказа в Авито */
    public string $id;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Item> Товары в заказе */
    public array $items;

    /** @var string|null Номер заказа в Авито в новой системе */
    public ?string $marketplaceId = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderPrices Schema field prices */
    public \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderPrices $prices;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\ReturnPolicy|null Schema field returnPolicy */
    public ?\Andy87\ClientsAvito\Generated\Schema\OrderManagement\ReturnPolicy $returnPolicy = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Schedules Schema field schedules */
    public \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Schedules $schedules;

    /** @var string Текущий статус заказа */
    public string $status;

    /** @var string Дата и время обновления заказа */
    public string $updatedAt;
}
