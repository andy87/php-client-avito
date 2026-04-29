<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeV2Out.
 */
class OpenAPIChatsByTimeV2Out extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chats' => 'chats', 'filters' => 'filters', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'filters', 'chats'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition::class], 'filters' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition> Данные с чатами */
    public array $chats;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters Schema field filters */
    public \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters $filters;

    /** @var int Количество чатов */
    public int $total;
}
