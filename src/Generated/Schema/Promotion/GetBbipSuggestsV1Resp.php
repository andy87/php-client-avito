<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/GetBbipSuggestsV1Resp.
 */
class GetBbipSuggestsV1Resp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1::class], 'items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestByItemV1::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1> Информация об ошибках получения варианта бюджета */
    public array $errors;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestByItemV1> Предлагаемые варианты бюджетов по каждому объявлению */
    public array $items;
}
