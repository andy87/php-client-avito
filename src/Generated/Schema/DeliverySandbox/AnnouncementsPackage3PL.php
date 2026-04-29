<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsPackage3PL.
 */
class AnnouncementsPackage3PL extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'parcels' => 'parcels', 'sealID' => 'sealID'];

    protected const REQUIRED_FIELDS = ['id', 'parcels'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['parcels' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementsParcel3PL::class]];

    /** @var string Идентификатор грузоместа (ШК грузоместа) */
    public string $id;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\AnnouncementsParcel3PL> Список посылок */
    public array $parcels;

    /** @var string|null Номер пломбы */
    public ?string $sealID = null;
}
