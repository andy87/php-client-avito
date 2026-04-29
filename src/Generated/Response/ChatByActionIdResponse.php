<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API chatByActionId.
 */
class ChatByActionIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['chat' => 'chat'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chat' => \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition|null Response field chat */
    public ?\Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition $chat = null;
}
