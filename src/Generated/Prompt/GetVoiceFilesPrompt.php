<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v1/accounts/{user_id}/getVoiceFiles.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getVoiceFiles
 */
class GetVoiceFilesPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/messenger/v1/accounts/{user_id}/getVoiceFiles';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = ['voice_ids' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'voice_ids' => 'voice_ids'];

    protected const REQUIRED_FIELDS = ['user_id', 'voice_ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = ['voice_ids'];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var array<int, string> Получение файлов голосовых сообщений с указанными voice_id */
    public array $voice_ids;
}
