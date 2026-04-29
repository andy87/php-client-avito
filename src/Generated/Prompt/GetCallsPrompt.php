<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /calltracking/v1/getCalls/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/calltracking/documentation#operation/get_calls
 */
class GetCallsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/calltracking/v1/getCalls/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    protected const NULLABLE_FIELDS = ['dateTimeTo'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'dateTimeTo', 'limit', 'offset'];

    /** @var string Время с которого нужно начинать поиск звонков по callTime (строка в формате RFC3339) */
    public string $dateTimeFrom;

    /** @var string|null Время до которого нужно искать заонки по callTime (строка в формате RFC3339). Если не указано, используется dateTimeFrom + 1 месяц. Максимально возможное значение - dateTimeFrom + 3 месяца. */
    public ?string $dateTimeTo = null;

    /** @var int Размер выборки */
    public int $limit;

    /** @var int Смещение выборки */
    public int $offset;
}
