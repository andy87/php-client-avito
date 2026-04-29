<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetRealtyBookingsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostBaseParamsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostRealtyPricesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PutBookingsInfoPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PutIntervalsPrompt;
use Andy87\ClientsAvito\Generated\Response\GetRealtyBookingsResponse;
use Andy87\ClientsAvito\Generated\Response\PostBaseParamsResponse;
use Andy87\ClientsAvito\Generated\Response\PostRealtyPricesResponse;
use Andy87\ClientsAvito\Generated\Response\PutBookingsInfoResponse;
use Andy87\ClientsAvito\Generated\Response\PutIntervalsResponse;

/**
 * Provider раздела Avito API "Краткосрочная аренда".
 * @property-read Str\BaseProvider $base
 * @property-read Str\BookingsProvider $bookings
 * @property-read Str\IntervalsProvider $intervals
 * @property-read Str\RealtyProvider $realty
 *
 */
class StrProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'base' => Str\BaseProvider::class,
        'bookings' => Str\BookingsProvider::class,
        'intervals' => Str\IntervalsProvider::class,
        'realty' => Str\RealtyProvider::class,
    ];

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
     * @return GetRealtyBookingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRealtyBookings(GetRealtyBookingsPrompt $prompt): GetRealtyBookingsResponse
    {
        /** @var Str\RealtyProvider $group */
        $group = $this->operationGroup('realty');

        return $group->getBookings($prompt);
    }

    /**
     * Установка базовых параметров
     * 
     * Обновляет базовые параметры: цена за ночь, минимальное количество ночей, доплата за гостя,  количество гостей больше которых активируется опция доплаты за гостя, период бесплатной отмены, параметры мгновенного бронирования (активность, максимальное/минимальное количество дней до заселения), скидки на бронирование.
     * 
     * OperationId: postBaseParams.
     * HTTP: POST /realty/v1/items/{item_id}/base.
     *
     * @param PostBaseParamsPrompt $prompt DTO запроса.
     *
     * @return PostBaseParamsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postBaseParams(PostBaseParamsPrompt $prompt): PostBaseParamsResponse
    {
        /** @var Str\BaseProvider $group */
        $group = $this->operationGroup('base');

        return $group->postParams($prompt);
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
     * @return PostRealtyPricesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postRealtyPrices(PostRealtyPricesPrompt $prompt): PostRealtyPricesResponse
    {
        /** @var Str\RealtyProvider $group */
        $group = $this->operationGroup('realty');

        return $group->postPrices($prompt);
    }

    /**
     * Заполнение календаря занятости объекта недвижимости
     * 
     * Заполнение календаря занятости объекта недвижимости (для краткосрочной аренды)
     * 
     * OperationId: putBookingsInfo.
     * HTTP: POST /core/v1/accounts/{user_id}/items/{item_id}/bookings.
     *
     * @param PutBookingsInfoPrompt $prompt DTO запроса.
     *
     * @return PutBookingsInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putBookingsInfo(PutBookingsInfoPrompt $prompt): PutBookingsInfoResponse
    {
        /** @var Str\BookingsProvider $group */
        $group = $this->operationGroup('bookings');

        return $group->putInfo($prompt);
    }

    /**
     * Заполнение доступности объекта недвижимости с квотами и без
     * 
     * Заполнение календаря доступности объекта недвижимости с квотами и без (для краткосрочной аренды)
     * 
     * OperationId: putIntervals.
     * HTTP: POST /realty/v1/items/intervals.
     *
     * @param PutIntervalsPrompt $prompt DTO запроса.
     *
     * @return PutIntervalsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putIntervals(PutIntervalsPrompt $prompt): PutIntervalsResponse
    {
        /** @var Str\IntervalsProvider $group */
        $group = $this->operationGroup('intervals');

        return $group->put($prompt);
    }
}
