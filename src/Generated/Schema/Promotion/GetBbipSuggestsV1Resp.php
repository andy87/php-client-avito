<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipSuggestsV1Resp.
 */
class GetBbipSuggestsV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\php_client_avito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\php_client_avito\Generated\Schema\Promotion\BbipSuggestByItemV1::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках получения варианта бюджета */
    public array $errors;

    /** @var array<int, \php_client_avito\Generated\Schema\Promotion\BbipSuggestByItemV1> Предлагаемые варианты бюджетов по каждому объявлению */
    public array $items;
}
