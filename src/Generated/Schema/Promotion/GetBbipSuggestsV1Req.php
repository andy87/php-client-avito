<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipSuggestsV1Req.
 */
class GetBbipSuggestsV1Req extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, int>|null Идентификаторы объявлений */
    public ?array $itemIds = null;
}
