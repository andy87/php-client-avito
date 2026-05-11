<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

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

    protected const CASTS = ['chats' => [\and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition::class]];

    protected const MODEL = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition>|null Response field chats */
    public ?array $chats = null;
}
