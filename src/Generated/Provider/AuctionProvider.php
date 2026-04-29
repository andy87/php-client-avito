<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetUserBidsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\SaveItemBidsPrompt;
use Andy87\ClientsAvito\Generated\Response\GetUserBidsResponse;
use Andy87\ClientsAvito\Generated\Response\SaveItemBidsResponse;

/**
 * Provider раздела Avito API "CPA-аукцион".
 * @property-read Auction\ItemProvider $item
 * @property-read Auction\UserProvider $user
 *
 */
class AuctionProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'item' => Auction\ItemProvider::class,
        'user' => Auction\UserProvider::class,
    ];

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
     * @return GetUserBidsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getUserBids(GetUserBidsPrompt $prompt): GetUserBidsResponse
    {
        /** @var Auction\UserProvider $group */
        $group = $this->operationGroup('user');

        return $group->getBids($prompt);
    }

    /**
     * Сохранение новых ставок
     * 
     * Метод позволяет сохранить для объявлений ставку (ставка указана в копейках) и время ее действия. Доступные ставки можно получить с помощью метода getUserBids 
     * Максимальное число идентификаторов объявления в запросе = 200.
     * Максимальное количество запросов в минуту - 200.
     * 
     * OperationId: saveItemBids.
     * HTTP: POST /auction/1/bids.
     *
     * @param SaveItemBidsPrompt $prompt DTO запроса.
     *
     * @return SaveItemBidsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveItemBids(SaveItemBidsPrompt $prompt): SaveItemBidsResponse
    {
        /** @var Auction\ItemProvider $group */
        $group = $this->operationGroup('item');

        return $group->saveBids($prompt);
    }
}
