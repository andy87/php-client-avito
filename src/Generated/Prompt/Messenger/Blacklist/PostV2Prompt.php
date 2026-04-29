<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Blacklist;

use Andy87\ClientsAvito\Generated\Prompt\PostBlacklistV2Prompt as BasePostBlacklistV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v2/accounts/{user_id}/blacklist.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postBlacklistV2
 * 
 * @property array<int, array<string, mixed>>|null $users Body field users
 */
class PostV2Prompt extends BasePostBlacklistV2Prompt
{
}
