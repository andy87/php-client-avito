<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /special-offers/v1/stats.
 * 
 * @documentation https://developers.avito.ru/api-catalog/sbc-gateway/documentation#operation/openApiStats
 */
class OpenApiStatsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['stats' => 'stats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\SbcGateway\OpenApiStatsResponseBody::class;

    /** @var array<int, array<string, mixed>>|null Response field stats */
    public ?array $stats = null;
}
