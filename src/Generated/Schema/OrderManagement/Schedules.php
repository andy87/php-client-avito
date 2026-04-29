<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/schedules.
 */
class Schedules extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['confirmTill' => 'confirmTill', 'deliveryDate' => 'deliveryDate', 'deliveryDateMa_' => 'deliveryDateMaх', 'deliveryDateMin' => 'deliveryDateMin', 'setTrackingNumberTill' => 'setTrackingNumberTill', 'shipTill' => 'shipTill'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['confirmTill', 'deliveryDate', 'deliveryDateMa_', 'deliveryDateMin', 'setTrackingNumberTill', 'shipTill'];

    protected const CASTS = [];

    /** @var string|null Дата, до которой продавцу нужно подтвердить заказ */
    public ?string $confirmTill = null;

    /** @var string|null Дата доставки товара покупателю переданная продавцом (RDBS) */
    public ?string $deliveryDate = null;

    /** @var string|null Максимальная ожидаемая дата доставки товара покупателю */
    public ?string $deliveryDateMa_ = null;

    /** @var string|null Минимальная ожидаемая дата доставки товара покупателю */
    public ?string $deliveryDateMin = null;

    /** @var string|null Дата, до которой продавцу нужно передать трек-номер заказа (DBS) */
    public ?string $setTrackingNumberTill = null;

    /** @var string|null Дата, до которой продавцу нужно отправить заказ */
    public ?string $shipTill = null;
}
