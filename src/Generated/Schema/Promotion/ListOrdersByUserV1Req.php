<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/ListOrdersByUserV1Req.
 */
class ListOrdersByUserV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['pagination'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Данные для постраничного чтения */
    public ?array $pagination = null;
}
