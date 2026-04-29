<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\SbcGateway;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiTariffInfoResponseBody.
 */
class OpenApiTariffInfoResponseBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['tariffInfo' => 'tariffInfo'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['tariffInfo'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Информация о текущем тарифе */
    public ?array $tariffInfo = null;
}
