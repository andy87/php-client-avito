<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/GetCampaignInfoForecastResult.
 */
class GetCampaignInfoForecastResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calls' => 'calls', 'views' => 'views'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Предсказание звонков */
    public ?array $calls = null;

    /** @var array<string, mixed>|null Предсказание просмотров */
    public ?array $views = null;
}
