<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SandboxCreateAnnouncementPackage.
 */
class SandboxCreateAnnouncementPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'parcelIDs' => 'parcelIDs', 'sealID' => 'sealID'];

    protected const REQUIRED_FIELDS = ['id', 'parcelIDs'];

    protected const NULLABLE_FIELDS = ['sealID'];

    protected const CASTS = [];

    /** @var string Штрихкод идентификатор грузоместа. */
    public string $id;

    /** @var array<int, string> Список идентификаторов посылок Авито. */
    public array $parcelIDs;

    /** @var string|null Номер пломбы грузоместа. */
    public ?string $sealID = null;
}
