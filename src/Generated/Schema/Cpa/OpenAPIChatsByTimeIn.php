<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeIn.
 */
class OpenAPIChatsByTimeIn extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'offset', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время с которого нужно начинать поиск чатов по date (строка в формате RFC3339) */
    public string $dateTimeFrom;

    /** @var int Размер выборки (значение в поле должно быть не более 100) */
    public int $limit;

    /** @var int Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный startTime чата из предыдущей выборки
 */
    public int $offset;
}
