<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/chatsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 */
class ChatsByTimeCpaCpaV2ChatsByTimePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v2/chatsByTime';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    /** @var string Время с которого нужно начинать поиск чатов по date (строка в формате RFC3339) */
    public string $dateTimeFrom;

    /** @var int Размер выборки (значение в поле должно быть не более 100) */
    public int $limit;

    /** @var int Смещение выборки (по-умолчанию 0). Для улучшения производительности лучше использовать максимальный date чата из предыдущей выборки
 */
    public int $offset;
}
