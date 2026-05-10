<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\OrderManagement;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderCheckConfirmationCodeRequest.
 */
class OrderCheckConfirmationCodeRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['confirmCode' => 'confirmCode', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Код, который показал пользователь */
    public ?string $confirmCode = null;

    /** @var string|null ID посылки в Авито */
    public ?string $parcelID = null;
}
