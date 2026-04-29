<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/items/intervals.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putIntervals
 */
class PutIntervalsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/realty/v1/items/intervals';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['intervals' => 'intervals', 'item_id' => 'item_id', 'source' => 'source'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['source'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['intervals', 'item_id', 'source'];

    /** @var array<int, array<string, mixed>>|null Список интервалов для выбранного объявления */
    public ?array $intervals = null;

    /** @var int|null ID объявления */
    public ?int $item_id = null;

    /** @var string|null Название PMS системы */
    public ?string $source = null;
}
