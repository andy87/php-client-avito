<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterGetData.
 */
class SortingCenterGetData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'deliveryProviderId' => 'deliveryProviderId', 'itinerary' => 'itinerary', 'name' => 'name', 'phones' => 'phones', 'photos' => 'photos', 'restriction' => 'restriction', 'schedule' => 'schedule'];

    protected const REQUIRED_FIELDS = ['deliveryProviderId', 'name', 'address', 'phones', 'itinerary', 'photos', 'schedule', 'restriction'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address::class, 'deliveryProviderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID::class, 'phones' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones::class, 'restriction' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction::class, 'schedule' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address Schema field address */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Address $address;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID Schema field deliveryProviderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\SortingCenterID $deliveryProviderId;

    /** @var string Описание как пройти/проехать */
    public string $itinerary;

    /** @var string Человекопонятное название ХАБа (будет использоваться в интефейсной части) */
    public string $name;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones Schema field phones */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryPhones $phones;

    /** @var array<int, string> Список ссылок на фотографии */
    public array $photos;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction Schema field restriction */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction $restriction;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule Schema field schedule */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Schedule $schedule;
}
