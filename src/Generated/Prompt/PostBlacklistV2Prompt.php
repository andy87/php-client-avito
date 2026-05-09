<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v2/accounts/{user_id}/blacklist.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postBlacklistV2
 */
class PostBlacklistV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/messenger/v2/accounts/{user_id}/blacklist';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'users' => 'users'];

    protected const REQUIRED_FIELDS = ['user_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['users'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var array<int, array<string, mixed>>|null Body field users */
    public ?array $users = null;
}
