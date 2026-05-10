<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/chatsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 */
class ChatsByTimeResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class]];

    protected const MODEL = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition>|null Response field chats */
    public ?array $chats = null;
}
