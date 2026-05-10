<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Messenger;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\GetChatsV2Prompt;
use and_y87\php_client_avito\Generated\Response\Messenger\Chats\GetV2Response;

/**
 * Группа методов "chats" раздела Avito API "Мессенджер".
 */
class ChatsProvider extends BaseAvitoProvider
{
    /**
     * Получение информации по чатам
     *
     * Возвращает список чатов
     *
     * OperationId: getChatsV2.
     * HTTP: GET /messenger/v2/accounts/{user_id}/chats.
     *
     * @param GetChatsV2Prompt $prompt DTO запроса.
     *
     * @return GetV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV2(GetChatsV2Prompt $prompt): GetV2Response
    {
        /** @var GetV2Response $response */
        $response = $this->request($prompt, GetV2Response::class);

        return $response;
    }
}
