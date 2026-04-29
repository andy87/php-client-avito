<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementPackage.
 */
class AnnouncementPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'parcelIDs' => 'parcelIDs', 'sealID' => 'sealID'];

    protected const REQUIRED_FIELDS = ['id', 'parcelIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор грузоместа (ШК грузоместа) */
    public string $id;

    /** @var array<int, string> Список посылок */
    public array $parcelIDs;

    /** @var string|null Номер пломбы */
    public ?string $sealID = null;
}
