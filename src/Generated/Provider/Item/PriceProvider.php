<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Item;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\UpdatePricePrompt;
use Andy87\ClientsAvito\Generated\Response\Item\Price\UpdateResponse;

/**
 * Группа методов "price" раздела Avito API "Объявления".
 */
class PriceProvider extends BaseAvitoProvider
{
    /**
     * Обновление цены объявления
     * 
     * Обновляет цену товара по id. 
     * Максимальное количество запросов в минуту - 150.
     * **Внимание! Доступно для категорий Товары, Запчасти, Авто, Недвижимость (кроме краткосрочной)**
     * 
     * OperationId: updatePrice.
     * HTTP: POST /core/v1/items/{item_id}/update_price.
     *
     * @param UpdatePricePrompt $prompt DTO запроса.
     *
     * @return UpdateResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function update(UpdatePricePrompt $prompt): UpdateResponse
    {
        /** @var UpdateResponse $response */
        $response = $this->request($prompt, UpdateResponse::class);

        return $response;
    }
}
