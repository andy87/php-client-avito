<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Str;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetRealtyBookingsPrompt;
use php_client_avito\Generated\Prompt\PostRealtyPricesPrompt;
use php_client_avito\Generated\Response\Str\Realty\GetBookingsResponse;
use php_client_avito\Generated\Response\Str\Realty\PostPricesResponse;

/**
 * Группа методов "realty" раздела Avito API "Краткосрочная аренда".
 */
class RealtyProvider extends BaseAvitoProvider
{
    /**
     * Получение списка броней по объявлению
     *
     * Возвращает информацию о бронированиях объекта за весь период.
     *
     * OperationId: getRealtyBookings.
     * HTTP: GET /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
     *
     * @param GetRealtyBookingsPrompt $prompt DTO запроса.
     *
     * @return GetBookingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBookings(GetRealtyBookingsPrompt $prompt): GetBookingsResponse
    {
        /** @var GetBookingsResponse $response */
        $response = $this->request($prompt, GetBookingsResponse::class);

        return $response;
    }

    /**
     * Актуализация параметров для выбранных периодов
     *
     * Обновляет параметры (цена за ночь, доплата за гостя, минимальная продолжительность брони) для каждого из переданных диапазонов дат, изменения применяются к каждой дате диапазона. В случае, если на занимаемые даты есть брони в неподтвержденных статусах, то брони переводятся в статус overbook.
     *
     * OperationId: postRealtyPrices.
     * HTTP: POST /realty/v1/accounts/{user_id}/items/{item_id}/prices.
     *
     * @param PostRealtyPricesPrompt $prompt DTO запроса.
     *
     * @return PostPricesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postPrices(PostRealtyPricesPrompt $prompt): PostPricesResponse
    {
        /** @var PostPricesResponse $response */
        $response = $this->request($prompt, PostPricesResponse::class);

        return $response;
    }
}
