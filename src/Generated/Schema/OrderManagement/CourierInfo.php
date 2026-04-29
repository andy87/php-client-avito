<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/courierInfo.
 */
class CourierInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'comment' => 'comment'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['address', 'comment'];

    protected const CASTS = [];

    /** @var string|null Адрес, на который покупатель оформил доставку */
    public ?string $address = null;

    /** @var string|null Комментарий покупателя */
    public ?string $comment = null;
}
