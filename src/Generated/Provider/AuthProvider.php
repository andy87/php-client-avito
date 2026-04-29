<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenAuthorizationCodePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenPrompt;
use Andy87\ClientsAvito\Generated\Prompt\RefreshAccessTokenAuthorizationCodePrompt;
use Andy87\ClientsAvito\Generated\Response\GetAccessTokenAuthorizationCodeResponse;
use Andy87\ClientsAvito\Generated\Response\GetAccessTokenResponse;
use Andy87\ClientsAvito\Generated\Response\RefreshAccessTokenAuthorizationCodeResponse;

/**
 * Provider раздела Avito API "Авторизация".
 * @property-read Auth\AccessProvider $access
 *
 */
class AuthProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'access' => Auth\AccessProvider::class,
    ];

    /**
     * Получение access token
     * 
     * Получения временного ключа для авторизации
     * 
     * OperationId: getAccessToken.
     * HTTP: POST /token.
     *
     * @param GetAccessTokenPrompt $prompt DTO запроса.
     *
     * @return GetAccessTokenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAccessToken(GetAccessTokenPrompt $prompt): GetAccessTokenResponse
    {
        /** @var Auth\AccessProvider $group */
        $group = $this->operationGroup('access');

        return $group->getToken($prompt);
    }

    /**
     * Получение access token
     * 
     * Получения временного ключа для авторизации запроса от лица пользователя
     * 
     * OperationId: getAccessTokenAuthorizationCode.
     * HTTP: POST /token‎.
     *
     * @param GetAccessTokenAuthorizationCodePrompt $prompt DTO запроса.
     *
     * @return GetAccessTokenAuthorizationCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAccessTokenAuthorizationCode(GetAccessTokenAuthorizationCodePrompt $prompt): GetAccessTokenAuthorizationCodeResponse
    {
        /** @var Auth\AccessProvider $group */
        $group = $this->operationGroup('access');

        return $group->getTokenAuthorizationCode($prompt);
    }

    /**
     * Обновление access token
     * 
     * Обновление временного ключа для авторизации запроса от лица пользователя
     * 
     * OperationId: refreshAccessTokenAuthorizationCode.
     * HTTP: POST /token‎‎.
     *
     * @param RefreshAccessTokenAuthorizationCodePrompt $prompt DTO запроса.
     *
     * @return RefreshAccessTokenAuthorizationCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function refreshAccessTokenAuthorizationCode(RefreshAccessTokenAuthorizationCodePrompt $prompt): RefreshAccessTokenAuthorizationCodeResponse
    {
        /** @var Auth\AccessProvider $group */
        $group = $this->operationGroup('access');

        return $group->refreshTokenAuthorizationCode($prompt);
    }
}
