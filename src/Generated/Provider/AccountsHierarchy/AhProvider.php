<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\AccountsHierarchy;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CheckAhUserV1Prompt;
use Andy87\ClientsAvito\Generated\Response\AccountsHierarchy\Ah\CheckUserV1Response;

/**
 * Группа методов "ah" раздела Avito API "Иерархия Аккаунтов".
 */
class AhProvider extends BaseAvitoProvider
{
    /**
     * Получение информации о статусе пользователя в ИА
     * 
     * Ручка для получения информации по ИА для пользователя
     * 
     * OperationId: checkAhUserV1.
     * HTTP: GET /checkAhUserV1.
     *
     * @param CheckAhUserV1Prompt $prompt DTO запроса.
     *
     * @return CheckUserV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function checkUserV1(CheckAhUserV1Prompt $prompt): CheckUserV1Response
    {
        /** @var CheckUserV1Response $response */
        $response = $this->request($prompt, CheckUserV1Response::class);

        return $response;
    }
}
