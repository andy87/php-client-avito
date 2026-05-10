<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterGetData.
 */
class SortingCenterGetData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'deliveryProviderId' => 'deliveryProviderId', 'itinerary' => 'itinerary', 'name' => 'name', 'phones' => 'phones', 'photos' => 'photos', 'restriction' => 'restriction', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'name', 'address', 'phones', 'itinerary', 'photos', 'schedule', 'restriction'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \php_client_avito\Generated\Schema\DeliverySandbox\Address::class, 'deliveryProviderId' => \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID::class, 'phones' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones::class, 'restriction' => \php_client_avito\Generated\Schema\DeliverySandbox\Restriction::class, 'schedule' => \php_client_avito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\Address Schema field address */
    public \php_client_avito\Generated\Schema\DeliverySandbox\Address $address;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID Schema field deliveryProviderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterID $deliveryProviderId;

    /** @var string Описание как пройти/проехать */
    public string $itinerary;

    /** @var string Человекопонятное название ХАБа (будет использоваться в интефейсной части) */
    public string $name;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones Schema field phones */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryPhones $phones;

    /** @var array<int, string> Список ссылок на фотографии */
    public array $photos;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\Restriction Schema field restriction */
    public \php_client_avito\Generated\Schema\DeliverySandbox\Restriction $restriction;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\Schedule Schema field schedule */
    public \php_client_avito\Generated\Schema\DeliverySandbox\Schedule $schedule;
}
