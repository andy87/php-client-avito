<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterPost.
 */
class SortingCenterPost extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'deliveryProviderId' => 'deliveryProviderId', 'itinerary' => 'itinerary', 'name' => 'name', 'phones' => 'phones', 'photos' => 'photos', 'restriction' => 'restriction', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'name', 'address', 'phones', 'itinerary', 'photos', 'directionTag', 'schedule', 'restriction'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Address::class, 'phones' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones::class, 'restriction' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Restriction::class, 'schedule' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Address Schema field address */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Address $address;

    /** @var string Уникальный идентификатор ХАБа на стороне службы доставки */
    public string $deliveryProviderId;

    /** @var string Описание как пройти/проехать */
    public string $itinerary;

    /** @var string Человекопонятное название ХАБа (будет использоваться в интефейсной части) */
    public string $name;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones Schema field phones */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones $phones;

    /** @var array<int, string> Список ссылок на фотографии.
<br />
В случае если фотографий нет, следует передать пустой массив.
 */
    public array $photos;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Restriction Schema field restriction */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Restriction $restriction;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule Schema field schedule */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Schedule $schedule;
}
