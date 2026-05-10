<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaigns.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaigns
 */
class GetAutostrategyCampaignsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaigns' => 'campaigns', 'totalCount' => 'totalCount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaigns' => [\php_client_avito\Generated\Schema\Autostrategy\Campaign::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Autostrategy\Campaigns::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Autostrategy\Campaign>|null Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения */
    public ?array $campaigns = null;

    /** @var int|null Общее количество кампаний, удовлетворяющих фильтрам */
    public ?int $totalCount = null;
}
