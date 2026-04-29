<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\SbcGateway;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiMultiCreateResponseBody.
 */
class OpenApiMultiCreateResponseBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['common' => 'common', 'dispatches' => 'dispatches'];

    protected const REQUIRED_FIELDS = ['common', 'dispatches'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Общие данные для всех объявлений */
    public array $common;

    /** @var array<int, array<string, mixed>> Список созданных рассылок */
    public array $dispatches;
}
