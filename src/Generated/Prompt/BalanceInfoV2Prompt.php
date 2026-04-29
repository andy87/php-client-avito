<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/balanceInfo.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV2
 */
class BalanceInfoV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/cpa/v2/balanceInfo';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
}
