<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getAdIdsByAvitoIds.
 */
class GetAdIdsByAvitoIdsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/items/ad_ids';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['query' => 'query', 'Authorization' => 'Authorization'];

    protected const REQUIRED_FIELDS = ['query', 'Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['query'];

    protected const BODY_FIELDS = [];

    /** @var string Список ID объявлений.
Формат значения: строка с идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 */
    public string $query;

    /** @var string Токен для авторизации */
    public string $Authorization;
}
