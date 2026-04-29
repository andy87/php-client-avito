<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpa/v1/chatByActionId/{actionId}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatByActionId
 */
class ChatByActionIdPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/cpa/v1/chatByActionId/{actionId}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'X_Source' => 'X-Source', 'actionId' => 'actionId'];

    protected const REQUIRED_FIELDS = ['Authorization', 'X_Source', 'actionId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['actionId'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var string Имя сервиса, отправляющего запрос */
    public string $X_Source;

    /** @var int Идентификатор целевого действия */
    public int $actionId;
}
