<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AnnouncementsParcel3PL.
 */
class AnnouncementsParcel3PL extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['barcode' => 'barcode', 'id' => 'id', 'senderBarcode' => 'senderBarcode', 'senderID' => 'senderID'];

    protected const REQUIRED_FIELDS = ['id', 'barcode'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string ШК посылки в системе получателя анонса */
    public string $barcode;

    /** @var string Идентификатор посылки Авито в системе получателя анонса */
    public string $id;

    /** @var string|null ШК посылки в системе инициатора анонса */
    public ?string $senderBarcode = null;

    /** @var string|null Идентификатор посылки Авито в системе инициатора анонса */
    public ?string $senderID = null;
}
