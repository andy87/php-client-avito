<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/setCourierDeliveryRangeRequest.
 */
class SetCourierDeliveryRangeRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'addressDetails' => 'addressDetails', 'endDate' => 'endDate', 'intervalType' => 'intervalType', 'name' => 'name', 'orderId' => 'orderId', 'phone' => 'phone', 'startDate' => 'startDate'];

    protected const REQUIRED_FIELDS = ['orderId', 'address', 'startDate', 'endDate', 'intervalType', 'phone', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Адрес продавца */
    public string $address;

    /** @var string|null Детали адреса продавца */
    public ?string $addressDetails = null;

    /** @var string Конечная дата приезда курьера */
    public string $endDate;

    /** @var string Тип интервала */
    public string $intervalType;

    /** @var string ФИО */
    public string $name;

    /** @var string ID заказа */
    public string $orderId;

    /** @var string Телефон */
    public string $phone;

    /** @var string Начальная дата приезда курьера */
    public string $startDate;
}
