<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/bbip/forecasts/get.
 *
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_forecasts_by_items_v1
 */
class GetBbipForecastsByItemsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/promotion/v1/items/services/bbip/forecasts/get';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['X_Is_Employee' => 'X-Is-Employee', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['X_Is_Employee'];

    protected const BODY_FIELDS = ['items'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Пользователь работает от имени сотрудника компании (boolean, "true"\\"false") */
    public ?string $X_Is_Employee = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipForecastRequestByItemV1> Данные по объявлениям для запроса прогноза */
    public array $items;
}
