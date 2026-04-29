<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterID.
 */
class SortingCenterID extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderId' => 'deliveryProviderId', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Уникальный идентификатор ХАБа на стороне службы доставки */
    public ?string $deliveryProviderId = null;

    /** @var string|null ### Справочник служб доставки
|    код    |    Название  |
|-----------|--------------|
|   pochta  | Почта России |
|   exmail  | ExMail       |
|     bb    | Boxberyy     |
|     pp    | PickPoint    |
|    dpd    | DPD          |
 */
    public ?string $provider = null;
}
