<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/buyerInfo.
 */
class BuyerInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fullName' => 'fullName', 'phoneNumber' => 'phoneNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null ФИО покупателя */
    public ?string $fullName = null;

    /** @var string|null Номер телефона покупателя */
    public ?string $phoneNumber = null;
}
