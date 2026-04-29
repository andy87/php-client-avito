<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/phonesInfoFromChats.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/phonesInfoFromChats
 */
class PhonesInfoFromChatsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v1/phonesInfoFromChats';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'limit' => 'limit', 'offset' => 'offset'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'limit', 'offset'];

    /** @var string Время с которого начинается поиск */
    public string $dateTimeFrom;

    /** @var int Body field limit */
    public int $limit;

    /** @var int Body field offset */
    public int $offset;
}
