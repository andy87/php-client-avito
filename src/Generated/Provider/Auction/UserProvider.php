<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Auction;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetUserBidsPrompt;
use Andy87\ClientsAvito\Generated\Response\Auction\User\GetBidsResponse;

/**
 * Группа методов "user" раздела Avito API "CPA-аукцион".
 */
class UserProvider extends BaseAvitoProvider
{
    /**
     * Получение информации о действующих и доступных ставках
     * 
     * Метод позволяет получать доступные ставки (ставка указана в копейках), а также показывает действующую ставку и время ее действия (если время действия не указано значит ставка действует бессрочно)по юзеру.
     * Максимальное количество запросов в минуту - 200.
     * 
     * OperationId: getUserBids.
     * HTTP: GET /auction/1/bids.
     *
     * @param GetUserBidsPrompt $prompt DTO запроса.
     *
     * @return GetBidsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBids(GetUserBidsPrompt $prompt): GetBidsResponse
    {
        /** @var GetBidsResponse $response */
        $response = $this->request($prompt, GetBidsResponse::class);

        return $response;
    }
}
