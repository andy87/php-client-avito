<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API get_bbip_forecasts_by_items_v1.
 */
class GetBbipForecastsByItemsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/promotion/v1/items/services/bbip/forecasts/get';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['items'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> Данные по объявлениям для запроса прогноза */
    public array $items;
}
