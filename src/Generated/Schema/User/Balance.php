<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\User;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
