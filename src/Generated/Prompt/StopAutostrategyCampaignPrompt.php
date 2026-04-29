<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaign/stop.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/stopAutostrategyCampaign
 */
class StopAutostrategyCampaignPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autostrategy/v1/campaign/stop';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['campaignId' => 'campaignId', 'version' => 'version'];

    protected const REQUIRED_FIELDS = ['campaignId', 'version'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['campaignId', 'version'];

    /** @var int Идентификатор активной кампании */
    public int $campaignId;

    /** @var int Текущая версия кампании */
    public int $version;
}
