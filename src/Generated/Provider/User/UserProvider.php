<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\User;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetUserBalancePrompt;
use php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;
use php_client_avito\Generated\Response\User\User\GetBalanceResponse;
use php_client_avito\Generated\Response\User\User\GetInfoSelfResponse;

/**
 * Группа методов "user" раздела Avito API "Информация о пользователе".
 */
class UserProvider extends BaseAvitoProvider
{
    /**
     * Получение баланса кошелька пользователя
     *
     * Возвращает сумму реальных денежных средств в кошельке, а также сумму бонусных средств
     *
     * OperationId: getUserBalance.
     * HTTP: GET /core/v1/accounts/{user_id}/balance/.
     *
     * @param GetUserBalancePrompt $prompt DTO запроса.
     *
     * @return GetBalanceResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBalance(GetUserBalancePrompt $prompt): GetBalanceResponse
    {
        /** @var GetBalanceResponse $response */
        $response = $this->request($prompt, GetBalanceResponse::class);

        return $response;
    }

    /**
     * Получение информации об авторизованном пользователе
     *
     * Возвращает идентификатор пользователя и его регистрационные данные
     *
     * OperationId: getUserInfoSelf.
     * HTTP: GET /core/v1/accounts/self.
     *
     * @param GetUserInfoSelfPrompt $prompt DTO запроса.
     *
     * @return GetInfoSelfResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInfoSelf(GetUserInfoSelfPrompt $prompt): GetInfoSelfResponse
    {
        /** @var GetInfoSelfResponse $response */
        $response = $this->request($prompt, GetInfoSelfResponse::class);

        return $response;
    }
}
