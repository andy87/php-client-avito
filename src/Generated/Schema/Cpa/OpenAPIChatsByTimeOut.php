<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenAPIChatsByTimeOut.
 */
class OpenAPIChatsByTimeOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chats' => 'chats', 'filters' => 'filters', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'filters', 'chats'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class], 'filters' => \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters::class];

    /** @var array<int, \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition> Данные с чатами */
    public array $chats;

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters Schema field filters */
    public \php_client_avito\Generated\Schema\Cpa\OpenAPIChatsByTimeMetaFilters $filters;

    /** @var int Количество чатов */
    public int $total;
}
