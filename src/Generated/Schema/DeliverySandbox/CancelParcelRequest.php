<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/cancelParcelRequest.
 */
class CancelParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actor' => 'actor', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID', 'actor'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['parcelID' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var string Кто отменяет посылку */
    public string $actor;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field parcelID */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $parcelID;
}
