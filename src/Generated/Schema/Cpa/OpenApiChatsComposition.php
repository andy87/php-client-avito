<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/OpenApiChatsComposition.
 */
class OpenApiChatsComposition extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['buyer' => 'buyer', 'chat' => 'chat', 'isArbitrageAvailable' => 'isArbitrageAvailable', 'item' => 'item'];

    protected const REQUIRED_FIELDS = ['chat', 'item', 'buyer', 'isArbitrageAvailable'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['buyer' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsBuyer::class, 'chat' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChat::class, 'item' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsItem::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsBuyer Schema field buyer */
    public \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsBuyer $buyer;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChat Schema field chat */
    public \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChat $chat;

    /** @var bool Доступность опротестования ЦД */
    public bool $isArbitrageAvailable;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsItem Schema field item */
    public \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsItem $item;
}
