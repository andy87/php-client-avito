<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['stat' => \php_client_avito\Generated\Schema\Autostrategy\Stat::class];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Autostrategy\Stat|null Response field stat */
    public ?\php_client_avito\Generated\Schema\Autostrategy\Stat $stat = null;

    /** @var array<string, mixed>|null Статистика, просумированная за все дни */
    public ?array $totals = null;
}
