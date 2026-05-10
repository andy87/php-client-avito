<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/setOrderMarkingRequest.
 */
class SetOrderMarkingRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['markings' => 'markings'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['markings' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Marking::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Marking>|null Массив маркировок, которые требуется передать */
    public ?array $markings = null;
}
