<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Auction;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\SaveItemBidsPrompt;
use Andy87\ClientsAvito\Generated\Response\Auction\Item\SaveBidsResponse;

/**
 * Группа методов "item" раздела Avito API "CPA-аукцион".
 */
class ItemProvider extends BaseAvitoProvider
{
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
     * @return SaveBidsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function saveBids(SaveItemBidsPrompt $prompt): SaveBidsResponse
    {
        /** @var SaveBidsResponse $response */
        $response = $this->request($prompt, SaveBidsResponse::class);

        return $response;
    }
}
