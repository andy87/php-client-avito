<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatsComposition.
 */
class OpenApiChatsComposition extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyer' => 'buyer', 'chat' => 'chat', 'isArbitrageAvailable' => 'isArbitrageAvailable', 'item' => 'item'];

    protected const REQUIRED_FIELDS = ['chat', 'item', 'buyer', 'isArbitrageAvailable'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['buyer' => \php_client_avito\Generated\Schema\Cpa\OpenApiChatsBuyer::class, 'chat' => \php_client_avito\Generated\Schema\Cpa\OpenApiChat::class, 'item' => \php_client_avito\Generated\Schema\Cpa\OpenApiChatsItem::class];

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenApiChatsBuyer Schema field buyer */
    public \php_client_avito\Generated\Schema\Cpa\OpenApiChatsBuyer $buyer;

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenApiChat Schema field chat */
    public \php_client_avito\Generated\Schema\Cpa\OpenApiChat $chat;

    /** @var bool Доступность опротестования ЦД */
    public bool $isArbitrageAvailable;

    /** @var \php_client_avito\Generated\Schema\Cpa\OpenApiChatsItem Schema field item */
    public \php_client_avito\Generated\Schema\Cpa\OpenApiChatsItem $item;
}
