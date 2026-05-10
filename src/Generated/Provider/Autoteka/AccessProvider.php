<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Autoteka;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetAccessTokenPrompt2;
use php_client_avito\Generated\Response\Autoteka\Access\GetTokenResponse;

/**
 * Группа методов "access" раздела Avito API "Автотека".
 */
class AccessProvider extends BaseAvitoProvider
{
    /**
     * Получение access token
     *
     * Получение временного ключа для авторизации, пример `curl -L -X POST 'https://pro.autoteka.ru/token/' -H 'Content-Type: application/x-www-form-urlencoded' --data-urlencode 'grant_type=client_credentials' --data-urlencode 'client_id=XXX' --data-urlencode 'client_secret=YYY'`
     *
     * OperationId: getAccessToken.
     * HTTP: POST /token.
     *
     * @param GetAccessTokenPrompt2 $prompt DTO запроса.
     *
     * @return GetTokenResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getToken(GetAccessTokenPrompt2 $prompt): GetTokenResponse
    {
        /** @var GetTokenResponse $response */
        $response = $this->request($prompt, GetTokenResponse::class);

        return $response;
    }
}
