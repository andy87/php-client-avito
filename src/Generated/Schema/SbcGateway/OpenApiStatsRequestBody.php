<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\SbcGateway;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiStatsRequestBody.
 */
class OpenApiStatsRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateTimeFrom' => 'dateTimeFrom', 'dateTimeTo' => 'dateTimeTo'];

    protected const REQUIRED_FIELDS = ['dateTimeFrom', 'dateTimeTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время выборки От. RFC3339 */
    public string $dateTimeFrom;

    /** @var string Время выборки До. RFC3339 */
    public string $dateTimeTo;
}
