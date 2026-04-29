<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getAutostrategyStat.
 */
class GetAutostrategyStatResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stat' => 'stat', 'totals' => 'totals'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['stat' => \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Stat::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Stat|null Response field stat */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autostrategy\Stat $stat = null;

    /** @var array<string, mixed>|null Статистика, просумированная за все дни */
    public ?array $totals = null;
}
