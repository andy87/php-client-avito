<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /special-offers/v1/stats.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiStats
 */
class OpenApiStatsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/special-offers/v1/stats';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    /** @var string Время выборки От. RFC3339 */
    public string $dateTimeFrom;

    /** @var string Время выборки До. RFC3339 */
    public string $dateTimeTo;
}
