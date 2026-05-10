<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Str;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\PutBookingsInfoPrompt;
use and_y87\php_client_avito\Generated\Response\Str\Bookings\PutInfoResponse;

/**
 * Группа методов "bookings" раздела Avito API "Краткосрочная аренда".
 */
class BookingsProvider extends BaseAvitoProvider
{
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
     * @return PutInfoResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putInfo(PutBookingsInfoPrompt $prompt): PutInfoResponse
    {
        /** @var PutInfoResponse $response */
        $response = $this->request($prompt, PutInfoResponse::class);

        return $response;
    }
}
