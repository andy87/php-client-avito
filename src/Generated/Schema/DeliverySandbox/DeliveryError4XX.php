<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryError4XX.
 */
class DeliveryError4XX extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Человекопонятное описание ошибки */
    public string $message;

    /** @var bool|null false – в случае возникновения ошибки */
    public ?bool $status = null;
}
