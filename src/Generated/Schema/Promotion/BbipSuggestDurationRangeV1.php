<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipSuggestDurationRangeV1.
 */
class BbipSuggestDurationRangeV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['from' => 'from', 'recommended' => 'recommended', 'to' => 'to'];

    protected const REQUIRED_FIELDS = ['from', 'to'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Минимальное кол-во дней для продвижения */
    public int $from;

    /** @var int|null Рекомендуемое кол-во дней для продвижения */
    public ?int $recommended = null;

    /** @var int Максимальное кол-во дней для продвижения */
    public int $to;
}
