<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostBlacklistV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Blacklist\PostV2Response;

/**
 * Группа методов "blacklist" раздела Avito API "Мессенджер".
 */
class BlacklistProvider extends BaseAvitoProvider
{
    /**
     * Добавление пользователя в blacklist
     * 
     * OperationId: postBlacklistV2.
     * HTTP: POST /messenger/v2/accounts/{user_id}/blacklist.
     *
     * @param PostBlacklistV2Prompt $prompt DTO запроса.
     *
     * @return PostV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postV2(PostBlacklistV2Prompt $prompt): PostV2Response
    {
        /** @var PostV2Response $response */
        $response = $this->request($prompt, PostV2Response::class);

        return $response;
    }
}
