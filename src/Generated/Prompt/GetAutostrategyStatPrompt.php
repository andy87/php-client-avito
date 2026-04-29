<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/stat.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyStat
 */
class GetAutostrategyStatPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autostrategy/v1/stat';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['campaignId' => 'campaignId'];

    protected const REQUIRED_FIELDS = ['campaignId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['campaignId'];

    /** @var int Идентификатор запущенной или уже прошедшей кампании */
    public int $campaignId;
}
