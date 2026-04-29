<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/CallsStatsDay.
 */
class CallsStatsDay extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['answered' => 'answered', 'calls' => 'calls', 'date' => 'date', 'newValue' => 'new', 'newAnswered' => 'newAnswered'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Отвеченные звонки */
    public ?int $answered = null;

    /** @var int|null Звонки всего */
    public ?int $calls = null;

    /** @var string|null Дата (YYYY-MM-DD) */
    public ?string $date = null;

    /** @var int|null Новые звонки */
    public ?int $newValue = null;

    /** @var int|null Новые и одновременно отвеченные звонки */
    public ?int $newAnswered = null;
}
