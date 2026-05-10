<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Str;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\PutIntervalsPrompt;
use and_y87\php_client_avito\Generated\Response\Str\Intervals\PutResponse;

/**
 * Группа методов "intervals" раздела Avito API "Краткосрочная аренда".
 */
class IntervalsProvider extends BaseAvitoProvider
{
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
     * @return PutResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function put(PutIntervalsPrompt $prompt): PutResponse
    {
        /** @var PutResponse $response */
        $response = $this->request($prompt, PutResponse::class);

        return $response;
    }
}
