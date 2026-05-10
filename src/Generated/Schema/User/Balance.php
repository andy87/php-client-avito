<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\User;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito user/Balance.
 */
class Balance extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bonus' => 'bonus', 'real' => 'real'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Сумма бонусных средств */
    public ?float $bonus = null;

    /** @var float|null Сумма реальных денежных средств */
    public ?float $real = null;
}
