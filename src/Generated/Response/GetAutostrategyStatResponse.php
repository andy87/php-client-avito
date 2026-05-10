<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/stat.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyStat
 */
class GetAutostrategyStatResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stat' => 'stat', 'totals' => 'totals'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['stat' => \and_y87\php_client_avito\Generated\Schema\Autostrategy\Stat::class];

    protected const MODEL = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autostrategy\Stat|null Response field stat */
    public ?\and_y87\php_client_avito\Generated\Schema\Autostrategy\Stat $stat = null;

    /** @var array<string, mixed>|null Статистика, просумированная за все дни */
    public ?array $totals = null;
}
