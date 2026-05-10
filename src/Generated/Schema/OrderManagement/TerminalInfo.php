<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\OrderManagement;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/terminalInfo.
 */
class TerminalInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'code' => 'code'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['address', 'code'];

    protected const CASTS = [];

    /** @var string|null Адрес ПВЗ */
    public ?string $address = null;

    /** @var string|null Код ПВЗ */
    public ?string $code = null;
}
