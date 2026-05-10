<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\SbcGateway;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
