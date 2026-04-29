<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/callsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/getCallsByTimeV2
 */
class GetCallsByTimeV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v2/callsByTime';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'limit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    /** @var string Время с которого нужно начинать поиск звонков по startTime (строка в формате RFC3339) */
    public string $dateTimeFrom;

    /** @var int Размер выборки */
    public int $limit;

    /** @var int|null Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать
максимальный startTime звонка из предыдущей выборки
 */
    public ?int $offset = null;
}
