<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getAutostrategyCampaigns.
 */
class GetAutostrategyCampaignsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaigns' => 'campaigns', 'totalCount' => 'totalCount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaigns' => [\Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaigns::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign>|null Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения */
    public ?array $campaigns = null;

    /** @var int|null Общее количество кампаний, удовлетворяющих фильтрам */
    public ?int $totalCount = null;
}
