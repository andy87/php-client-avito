<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /cpa/v1/chatByActionId/{actionId}.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatByActionId
 */
class ChatByActionIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['chat' => 'chat'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chat' => \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class];

    protected const MODEL = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition|null Response field chat */
    public ?\and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition $chat = null;
}
