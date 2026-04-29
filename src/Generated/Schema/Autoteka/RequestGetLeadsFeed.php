<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestGetLeadsFeed.
 */
class RequestGetLeadsFeed extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cursor' => 'cursor', 'limit' => 'limit', 'platformId' => 'platformId'];

    protected const REQUIRED_FIELDS = ['platformId', 'limit'];

    protected const NULLABLE_FIELDS = ['cursor'];

    protected const CASTS = [];

    /** @var int|null Schema field cursor */
    public ?int $cursor = null;

    /** @var int Количество записей в ответе */
    public int $limit;

    /** @var int Schema field platformId */
    public int $platformId;
}
