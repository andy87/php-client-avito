<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Terminal.
 */
class Terminal extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'deliveryProviderId' => 'deliveryProviderId', 'directionTag' => 'directionTag', 'displayName' => 'displayName', 'itinerary' => 'itinerary', 'name' => 'name', 'options' => 'options', 'phones' => 'phones', 'photos' => 'photos', 'restriction' => 'restriction', 'schedule' => 'schedule', 'services' => 'services', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'name', 'address', 'phones', 'itinerary', 'photos', 'directionTag', 'services', 'schedule', 'restriction'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address::class, 'directionTag' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class, 'phones' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones::class, 'restriction' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction::class, 'schedule' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address Schema field address */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address $address;

    /** @var string Уникальный идентификатор ПВЗ на стороне службы доставки (не допускается использование символа двоеточия «:» в идентификаторе) */
    public string $deliveryProviderId;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;

    /** @var string|null Отображаемое пользователям кастомное наименование пункта самовывоза. Требуется, чтобы отличать разные точки по бренду и виду.
<br />
Требования:

1. <p style="padding-bottom: 10px;">Количество слов min: 1, max: 2.</p>
2. <p style="padding-bottom: 10px;">Длина 1 слова min: 3 символа, max: 15 символов.</p>
3. <p style="padding-bottom: 10px;">Если 2 слова, то суммарно не более 20 символов, включая пробел.</p>

Предупреждение: Терминалы не зальются, если displayName не будет удовлетворять вышеперечисленным условиям
 */
    public ?string $displayName = null;

    /** @var string Описание как пройти */
    public string $itinerary;

    /** @var string Человекопонятное название пункта самовывоза (будет использоваться в интефейсной части) */
    public string $name;

    /** @var array<int, string>|null Доступные в точке выдачи опции. Примерка (fitting), проверка электроники (electronics-checking), 
оплата при получении картой (cod-by-card), оплата при получении наличными (cod-by-cash).
Массовая сдача заказов (multi-drop-off) в процессе разработки.
 */
    public ?array $options = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones Schema field phones */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones $phones;

    /** @var array<int, string> Список ссылок на фотографии.
<br />
В случае если фотографий нет, следует передать пустой массив.
 */
    public array $photos;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction Schema field restriction */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction $restriction;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule Schema field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule $schedule;

    /** @var array<int, string> Доступные в ПВЗ услуги. Забор (intake), выдача (delivery).
Отображение пункта выдачи на карте отправителя/получателя посылки зависит от наличия соответствующей услуги у пункта выдачи.  
- если указана услуга `delivery` - ПВЗ будет показан на карте покупателя, при условии соответствия посылки ограничениям ПВЗ (Restriction)
- если указана услуга `intake` - ПВЗ будет показан на карте продавца, при условии соответствия посылки ограничениям ПВЗ (Restriction)
 */
    public array $services;

    /** @var mixed|null Тип терминала (Если не указан, то по умолчанию указан тип PVZ) */
    public mixed $type = null;
}
