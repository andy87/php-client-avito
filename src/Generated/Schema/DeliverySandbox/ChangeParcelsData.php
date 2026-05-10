<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsData.
 */
class ChangeParcelsData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['status' => 'status'];

    protected const REQUIRED_FIELDS = ['status'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string По полю статус со значением ok понимаем, что заявка успешно принята в работу. */
    public string $status;
}
