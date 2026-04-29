<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Auth;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenAuthorizationCodePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenPrompt;
use Andy87\ClientsAvito\Generated\Prompt\RefreshAccessTokenAuthorizationCodePrompt;
use Andy87\ClientsAvito\Generated\Response\Auth\Access\GetTokenAuthorizationCodeResponse;
use Andy87\ClientsAvito\Generated\Response\Auth\Access\GetTokenResponse;
use Andy87\ClientsAvito\Generated\Response\Auth\Access\RefreshTokenAuthorizationCodeResponse;

/**
 * Группа методов "access" раздела Avito API "Авторизация".
 */
class AccessProvider extends BaseAvitoProvider
{
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
     * @return GetTokenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getToken(GetAccessTokenPrompt $prompt): GetTokenResponse
    {
        /** @var GetTokenResponse $response */
        $response = $this->request($prompt, GetTokenResponse::class);

        return $response;
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
     * @return GetTokenAuthorizationCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTokenAuthorizationCode(GetAccessTokenAuthorizationCodePrompt $prompt): GetTokenAuthorizationCodeResponse
    {
        /** @var GetTokenAuthorizationCodeResponse $response */
        $response = $this->request($prompt, GetTokenAuthorizationCodeResponse::class);

        return $response;
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
     * @return RefreshTokenAuthorizationCodeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function refreshTokenAuthorizationCode(RefreshAccessTokenAuthorizationCodePrompt $prompt): RefreshTokenAuthorizationCodeResponse
    {
        /** @var RefreshTokenAuthorizationCodeResponse $response */
        $response = $this->request($prompt, RefreshTokenAuthorizationCodeResponse::class);

        return $response;
    }
}
