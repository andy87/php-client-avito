<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/CallsByTime.
 */
class CallsByTime extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время с которого нужно начинать поиск звонков по startTime (строка в формате RFC3339) */
    public string $dateTimeFrom;

    /** @var int Размер выборки */
    public int $limit;

    /** @var int|null Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать
максимальный startTime звонка из предыдущей выборки
 */
    public ?int $offset = null;
}
