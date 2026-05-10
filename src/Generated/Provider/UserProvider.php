<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetUserBalancePrompt;
use php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;
use php_client_avito\Generated\Prompt\PostOperationsHistoryPrompt;
use php_client_avito\Generated\Response\GetUserBalanceResponse;
use php_client_avito\Generated\Response\GetUserInfoSelfResponse;
use php_client_avito\Generated\Response\PostOperationsHistoryResponse;

/**
 * Provider раздела Avito API "Информация о пользователе".
 * @property-read User\OperationsProvider $operations
 * @property-read User\UserProvider $user
 *
 */
class UserProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'operations' => User\OperationsProvider::class,
        'user' => User\UserProvider::class,
    ];

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
     * @return GetUserBalanceResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getUserBalance(GetUserBalancePrompt $prompt): GetUserBalanceResponse
    {
        /** @var User\UserProvider $group */
        $group = $this->operationGroup('user');

        return $group->getBalance($prompt);
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
     * @return GetUserInfoSelfResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getUserInfoSelf(GetUserInfoSelfPrompt $prompt): GetUserInfoSelfResponse
    {
        /** @var User\UserProvider $group */
        $group = $this->operationGroup('user');

        return $group->getInfoSelf($prompt);
    }

    /**
     * Получение истории операций пользователя
     *
     * Возвращает список операций пользователя (списания/пополнение кошелька - деньги и бонусы) за определенный временной период (задается пользователем)
     *
     * OperationId: postOperationsHistory.
     * HTTP: POST /core/v1/accounts/operations_history/.
     *
     * @param PostOperationsHistoryPrompt $prompt DTO запроса.
     *
     * @return PostOperationsHistoryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postOperationsHistory(PostOperationsHistoryPrompt $prompt): PostOperationsHistoryResponse
    {
        /** @var User\OperationsProvider $group */
        $group = $this->operationGroup('operations');

        return $group->postHistory($prompt);
    }
}
