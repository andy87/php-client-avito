<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autostrategy;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/GetStatRequestBody.
 */
class GetStatRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaignId' => 'campaignId'];

    protected const REQUIRED_FIELDS = ['campaignId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор запущенной или уже прошедшей кампании */
    public int $campaignId;
}
