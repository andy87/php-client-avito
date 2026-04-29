<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Item;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostCallsStatsPrompt;
use Andy87\ClientsAvito\Generated\Response\Item\Calls\PostStatsResponse;

/**
 * Группа методов "calls" раздела Avito API "Объявления".
 */
class CallsProvider extends BaseAvitoProvider
{
    /**
     * Получение статистики по звонкам
     * 
     * Получение агрегированной статистики звонков, полученных пользователем
     * 
     * OperationId: postCallsStats.
     * HTTP: POST /core/v1/accounts/{user_id}/calls/stats/.
     *
     * @param PostCallsStatsPrompt $prompt DTO запроса.
     *
     * @return PostStatsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postStats(PostCallsStatsPrompt $prompt): PostStatsResponse
    {
        /** @var PostStatsResponse $response */
        $response = $this->request($prompt, PostStatsResponse::class);

        return $response;
    }
}
