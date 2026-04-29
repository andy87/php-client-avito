<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Address.
 */
class Address extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'building' => 'building', 'country' => 'country', 'fias' => 'fias', 'floor' => 'floor', 'house' => 'house', 'housing' => 'housing', 'lat' => 'lat', 'lng' => 'lng', 'locality' => 'locality', 'localityType' => 'localityType', 'porch' => 'porch', 'region' => 'region', 'room' => 'room', 'street' => 'street', 'subRegion' => 'subRegion', 'subRegionType' => 'subRegionType', 'zipCode' => 'zipCode'];

    protected const REQUIRED_FIELDS = ['conuntry', 'region', 'locality', 'fias', 'zipCode', 'lat', 'lng'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['zipCode' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryZipCode::class];

    /** @var string|null Человекочитаемое представление адреса */
    public ?string $addressRow = null;

    /** @var string|null Строение */
    public ?string $building = null;

    /** @var string|null Страна */
    public ?string $country = null;

    /** @var string ФИАС идентификатор населенного пункта, в котором расположен ПВЗ. Не может быть пустым. Должен иметь формат UUID. */
    public string $fias;

    /** @var int|null Этаж */
    public ?int $floor = null;

    /** @var string|null Дом */
    public ?string $house = null;

    /** @var string|null Корпус */
    public ?string $housing = null;

    /** @var float Географическая широта, в градусах. */
    public float $lat;

    /** @var float Географическая долгота, в градусах. */
    public float $lng;

    /** @var string Населенный пункт. Не может быть пустым. */
    public string $locality;

    /** @var string|null Тип населенного пункта */
    public ?string $localityType = null;

    /** @var string|null Подъезд */
    public ?string $porch = null;

    /** @var string Субъект Российской Федерации.  
Возможные типы субъектов: республики, края, области, города федерального значения, автономные области и автономные округа
 */
    public string $region;

    /** @var string|null Квартира (офис). */
    public ?string $room = null;

    /** @var string|null Улица */
    public ?string $street = null;

    /** @var string|null Субрегион */
    public ?string $subRegion = null;

    /** @var string|null Тип субрегиона - муниципальный район/городской округ */
    public ?string $subRegionType = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryZipCode Schema field zipCode */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryZipCode $zipCode;
}
