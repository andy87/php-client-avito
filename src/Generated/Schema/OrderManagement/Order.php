<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/order.
 */
class Order extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['availableActions' => 'availableActions', 'createdAt' => 'createdAt', 'delivery' => 'delivery', 'id' => 'id', 'items' => 'items', 'marketplaceId' => 'marketplaceId', 'prices' => 'prices', 'returnPolicy' => 'returnPolicy', 'schedules' => 'schedules', 'status' => 'status', 'updatedAt' => 'updatedAt'];

    protected const REQUIRED_FIELDS = ['id', 'createdAt', 'updatedAt', 'items', 'prices', 'status', 'delivery', 'schedules'];

    protected const NULLABLE_FIELDS = ['availableActions', 'marketplaceId'];

    protected const CASTS = ['availableActions' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Action::class], 'delivery' => \and_y87\php_client_avito\Generated\Schema\OrderManagement\Delivery::class, 'items' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Item::class], 'prices' => \and_y87\php_client_avito\Generated\Schema\OrderManagement\OrderPrices::class, 'returnPolicy' => \and_y87\php_client_avito\Generated\Schema\OrderManagement\ReturnPolicy::class, 'schedules' => \and_y87\php_client_avito\Generated\Schema\OrderManagement\Schedules::class];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Action>|null Массив действий доступных по заказу. Действие с флагом required необходимо выполнить для движения заказа. В случае, когда действия от продавца не требуются, массив будет пустой.

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

    /** @var \and_y87\php_client_avito\Generated\Schema\OrderManagement\Delivery Schema field delivery */
    public \and_y87\php_client_avito\Generated\Schema\OrderManagement\Delivery $delivery;

    /** @var string Номер заказа в Авито */
    public string $id;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Item> Товары в заказе */
    public array $items;

    /** @var string|null Номер заказа в Авито в новой системе */
    public ?string $marketplaceId = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\OrderManagement\OrderPrices Schema field prices */
    public \and_y87\php_client_avito\Generated\Schema\OrderManagement\OrderPrices $prices;

    /** @var \and_y87\php_client_avito\Generated\Schema\OrderManagement\ReturnPolicy|null Schema field returnPolicy */
    public ?\and_y87\php_client_avito\Generated\Schema\OrderManagement\ReturnPolicy $returnPolicy = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\OrderManagement\Schedules Schema field schedules */
    public \and_y87\php_client_avito\Generated\Schema\OrderManagement\Schedules $schedules;

    /** @var string Текущий статус заказа */
    public string $status;

    /** @var string Дата и время обновления заказа */
    public string $updatedAt;
}
