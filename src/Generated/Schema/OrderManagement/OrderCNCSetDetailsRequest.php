<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderCNCSetDetailsRequest.
 */
class OrderCNCSetDetailsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'bookingPeriod' => 'bookingPeriod', 'details' => 'details', 'id' => 'id', 'marketplaceId' => 'marketplaceId'];

    protected const REQUIRED_FIELDS = ['id', 'marketplaceId', 'bookingPeriod'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Адрес получения товара */
    public ?string $address = null;

    /** @var int Сроки бронирования товара */
    public int $bookingPeriod;

    /** @var string|null Комментарий, который получит покупатель */
    public ?string $details = null;

    /** @var string ID заказа в Авито */
    public string $id;

    /** @var string Номер заказа в Авито в новой системе */
    public string $marketplaceId;
}
