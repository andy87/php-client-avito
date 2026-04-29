<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/returnPolicy.
 */
class ReturnPolicy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['returnStatus' => 'returnStatus', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null - `in_transit` - возврат в пути; - `ready_to_pickup` - возврат доставлен, его можно получить; - `self_return` - возврат осуществляется продавцом самостоятельно (только для DBS).
 */
    public ?string $returnStatus = null;

    /** @var string|null Номер отправления */
    public ?string $trackingNumber = null;
}
