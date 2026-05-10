<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
