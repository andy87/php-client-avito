<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v2/chatsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 */
class ChatsByTimeCpaCpaV2ChatsByTimeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition::class]];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition>|null Response field chats */
    public ?array $chats = null;
}
