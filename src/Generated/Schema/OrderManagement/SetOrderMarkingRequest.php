<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/setOrderMarkingRequest.
 */
class SetOrderMarkingRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['markings' => 'markings'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['markings' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Marking::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Marking>|null Массив маркировок, которые требуется передать */
    public ?array $markings = null;
}
