<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/EditCampaignRequestBody.
 */
class EditCampaignRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budget' => 'budget', 'calcId' => 'calcId', 'campaignId' => 'campaignId', 'description' => 'description', 'finishTime' => 'finishTime', 'items' => 'items', 'startTime' => 'startTime', 'title' => 'title', 'version' => 'version'];

    protected const REQUIRED_FIELDS = ['campaignId', 'version'];

    protected const NULLABLE_FIELDS = ['calcId'];

    protected const CASTS = [];

    /** @var int|null Новый бюджет кампании в рублях */
    public ?int $budget = null;

    /** @var int|null Идентификатор расчета бюджета из ответа ручки `/autostrategy/v1/budget` */
    public ?int $calcId = null;

    /** @var int Идентификатор активной кампании */
    public int $campaignId;

    /** @var string|null Новое описание кампании */
    public ?string $description = null;

    /** @var string|null Новое время окончания кампании */
    public ?string $finishTime = null;

    /** @var array<int, int>|null Новый список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании */
    public ?array $items = null;

    /** @var string|null Новое время начала кампании */
    public ?string $startTime = null;

    /** @var string|null Новое название кампании */
    public ?string $title = null;

    /** @var int Текущая версия кампании */
    public int $version;
}
