<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\User;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostOperationsHistoryPrompt;
use Andy87\ClientsAvito\Generated\Response\User\Operations\PostHistoryResponse;

/**
 * Группа методов "operations" раздела Avito API "Информация о пользователе".
 */
class OperationsProvider extends BaseAvitoProvider
{
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
     * @return PostHistoryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postHistory(PostOperationsHistoryPrompt $prompt): PostHistoryResponse
    {
        /** @var PostHistoryResponse $response */
        $response = $this->request($prompt, PostHistoryResponse::class);

        return $response;
    }
}
